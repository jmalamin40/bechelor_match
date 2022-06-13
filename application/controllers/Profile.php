<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

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
	   // echo $userid;
	   // exit;
		if (!$userid) {
			header('Location:'.base_url().'Login.txt');
		}
	}
	public function myProfile()
	{
		$data['menu'] = 'My Profile';
		$data['title'] = 'My Profile Page';
		$data['meta_des'] = 'My Profile ';
		$data['meta_key'] = ' ';
        $userid = $this->session->userdata('user_id');
        $data['data'] = $this->db->get_where('table_user', array('user_id'=>$userid, 'status'=>1))->row();
		$this->load->view('profile/index', $data);
		
	}
    public function profileUpdate()
    {
        $user_id = $this->input->post('user_id');
        $data['username'] = $this->input->post('username');
        $password = $this->input->post('password');
        if($password){
            $data['password'] = sha1($password);
        }
        $data['fullname'] = $this->input->post('fullname');
        $data['phone'] = $this->input->post('phone');
        $data['email'] = $this->input->post('email');
        $this->db->update('table_user',$data, array('user_id'=>$user_id));
        redirect('myProfile.txt');
    }
}
