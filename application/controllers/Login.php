<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
	public function index()
	{
		$user= $this->session->userdata('user_id');
		
		if (!empty($user)) {
			redirect('Dashboard-member.txt');
		}else{
			$user_id  = $this->input->cookie('user_id_match', TRUE);
			if (!empty($user_id)) {
				$userdata= $this->db->get_where('table_user', array('user_id'=>$user_id))->row();
				$data['user_id']  =  $userdata->user_id;
			    $data['username'] = $userdata->username;
			    $data['fullname'] = $userdata->fullname;
			    $data['phone']    = $userdata->phone;
			    $data['match_id'] = $userdata->match_id;
			    $data['email']    = $userdata->email;
			    $this->session->set_userdata($data);
			    redirect('Dashboard-member.txt');
			}else{
				$data['menu'] = 'login';
				$data['title'] = 'Login Member';
				$data['meta_des'] = 'Login Match ';
				$data['meta_key'] = 'Login Match ';
				$this->load->view('login/index', $data);
			}

		}
		
		
	}
	public function submit()
	{
	    $this->load->helper('cookie');
		$this->load->model('Login_model');
		$username = htmlspecialchars($this->input->post('username'));
		$pass     = $this->input->post('pass');
		$result = $this->Login_model->loginCheck($username, $pass);
	
		if (!empty($result)) {
		        $cookie= array(
	               'name'   => 'user_id_match',
	               'value'  => $result->user_id,
	               'expire' => time() + (10 * 365 * 24 * 60 * 60),
	           );
		        $this->input->set_cookie($cookie);
		        $cookie2= array(
	               'name'   => 'match_id',
	               'value'  => $result->match_id,
	               'expire' => time() + (10 * 365 * 24 * 60 * 60),
	           );
		        $this->input->set_cookie($cookie2);
			    $data['user_id'] = $result->user_id;
			    $data['username'] = $result->username;
			    $data['fullname'] = $result->fullname;
			    $data['phone'] = $result->phone;
			    $data['match_id'] = $result->match_id;
			    $data['email'] = $result->email;
			    $this->session->set_userdata($data);
			    
			    redirect('Dashboard-member.txt');
		
	}else{
	     $this->session->set_flashdata('msg', 'Username or Password Not Match');
		 redirect('Login.txt');
	}

  }
  public function logout()
  {
  	$this->session->sess_destroy();
  	delete_cookie("user_id_match");
  	delete_cookie("match_id");
  	redirect('Login.txt');
  }
}
