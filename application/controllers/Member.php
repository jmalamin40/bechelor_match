<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

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
	public function index()
	{
		$data['menu'] = 'dashboard';
		$data['title'] = 'Dashboard Member';
		$data['meta_des'] = 'Dashboard user ';
		$data['meta_key'] = 'Dashboard Match ';
		$this->load->view('member/index', $data);
		
	}
}
