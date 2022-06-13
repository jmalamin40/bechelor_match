<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class MView extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function table_addres($array, $fil, $val)
	{
		$this->db->select('*');
		$this->db->from('address');
		$this->db->where($array);
		$this->db->order_by($fil, $val);
		return $this->db->get()->result();
	}
	public function table_row($col, $table, $array)
	{
		$this->db->select($col);
		$this->db->from($table);
		$this->db->where($array);
		return $this->db->get()->row();
	}
	public function table_result($col, $table, $array)
	{
		$this->db->select($col);
		$this->db->from($table);
		$this->db->where($array);
		return $this->db->get()->result();
	}
	public function login_checker($username, $password)
	{
		$this->db->select('*');
		$this->db->from('customer_info');
		$this->db->where(array('phone'=>$username, 'user_password'=>$password));
		$query= $this->db->get()->row();
		if (!empty($query)) {
			return $query;
		}else{
			$this->db->select('*');
			$this->db->from('customer_info');
			$this->db->where(array('email'=>$username, 'user_password'=>$password));
			return $this->db->get()->row();
		}
	}
	public function thisMonthUserExpense($id)
	{
	    $this->db->select('total_price');
	    $this->db->from('table_income_expense');
	    $this->db->where('user_id', $id);
	    //$this->db->like('date', date('Y-m'));
	    $redata= $this->db->get()->result();
	    $total = 0;
	    foreach($redata as $v)
	    {
	        $total += $v->total_price;
	    }
	    return $total;
	}
}