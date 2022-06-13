<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Expense extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
		$userid = $this->session->userdata('user_id');
		if (empty($userid)) {
			header('Location:'.base_url().'Login.txt');
		}
	}
	public function index()
	{
		$data['menu'] = 'addexpense';
		$data['title'] = 'Add Expense Member';
		$data['meta_des'] = 'Expense user ';
		$data['meta_key'] = 'Expense Match ';
		$this->load->view('member/expense/addexpense', $data);
		
	}
	public function expenselist()
	{
		$data['menu'] = 'expenselist';
		$data['title'] = 'Expense List';
		$data['meta_des'] = 'Expense List ';
		$data['meta_key'] = 'Expense List ';
		$this->load->view('member/expense/index', $data);
	}
	public function submit()
	{
		$total= 0;
		$data['head_id']  = htmlspecialchars($this->input->post('head_id'));
		$data['user_id']  = $this->session->userdata('user_id');
		$data['match_id'] = $this->session->userdata('match_id');
		$datefg = $this->input->post('date');
		$dateArray= explode('/', $datefg);

		$data['date']     = date('Y-m-d', strtotime($datefg));
		
		$this->db->insert('table_income_expense', $data);
		$ie_id = $this->db->insert_id();
		$item_name = $this->input->post('item_name');
		$item_qty = $this->input->post('item_qty');
		$item_price = $this->input->post('item_price');
		foreach ($item_name as $key => $value) {
			$datas['item_name'] = $item_name[$key];
			$datas['item_qty'] = $item_qty[$key];
			$datas['item_price'] = $item_price[$key];
			$datas['ie_id'] = $ie_id;
			$this->db->insert('table_income_expense_item', $datas);
			$total += $item_price[$key];
		}
		$this->db->where('ie_id', $ie_id);
		$this->db->update('table_income_expense', array('total_price'=>$total));
		if(!empty($ie_id)){
		    $this->db->insert('table_aprove', array('user_id'=>$this->session->userdata('user_id'), 'ie_id'=>$ie_id));
		}
		$this->session->set_flashdata('msg', 'Data Inserted');
		redirect('Add-expense-bill.txt');
	}
	public function showexpensedata($id = '')
	{
	    $ie_id= $this->MdFive->decode_md5($id);
	    
	    $data['menu'] = 'showdetails';
		$data['title'] = 'Expense Details';
		$data['meta_des'] = 'Expense Details ';
		$data['meta_key'] = 'Expense Details ';
		$this->load->view('member/expense/showdetails', $data);
	    
	    
	   
	}
	public function showexpensedataUpdate($id)
	{
	    $ie_id= $this->MdFive->decode_md5($id);
	    $this->db->insert('table_aprove', array('user_id'=>$this->session->userdata('user_id'), 'ie_id'=>$ie_id));
	    $match_user= $this->MView->table_result('user_id', 'table_user', array('status'=>1, 'match_id'=>$this->session->userdata('match_id')));
	    $aprove ='';
	    $naprove ='';
	    foreach($match_user as $v){
	        $this->db->select('*');
    	    $this->db->from('table_aprove');
    	    $this->db->where('ie_id', $ie_id);
    	    $this->db->where_in('user_id', $v->user_id);
    	    $count= $this->db->get()->num_rows();
    	    if($count == 1)
    	    {
    	        $aprove = 'ok';
    	    }else{
    	        $naprove = 'not';
    	    }
	    }
	    
	    if($naprove == '')
	    {
	        $this->db->where('ie_id', $ie_id);
	        $this->db->update('table_income_expense', array('aprove_status'=>2));
	    }
	    redirect('show-Details.txt/'.$id);
	    
	   
	}
	public function expenseByUser($id, $name)
	{
	   $user_id= $this->MdFive->decode_md5($id); 
	   $this->db->select('*');
	   $this->db->from('table_income_expense');
	   $this->db->where('match_id', $this->session->userdata('match_id'));
	   $this->db->where('user_id', $user_id);
	   $this->db->order_by('ie_id', 'desc');
	   $data['expense']=$this->db->get()->result();
	   
	    $data['menu'] = 'showdetails';
        $data['title'] = $name;
        $data['meta_des'] = 'Expense Details ';
        $data['meta_key'] = 'Expense Details ';
        $this->load->view('member/expense/expensebyuser', $data);
	}
}
