<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Login_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function loginCheck($username, $pass)
	{
		$this->db->select('*');
		$this->db->from('table_user');
	    $this->db->where('username', $username);
	    $this->db->where('password', sha1($pass));
	    $this->db->where('status', 1);
	    $result= $this->db->get()->row();
	    if (!empty($result)) {
	    	return $result;
	    }else{
	    	$this->db->select('*');
			$this->db->from('table_user');
	    	$this->db->where('phone', $username);
	    	$this->db->where('password', sha1($pass));
	    	$this->db->where('status', 1);
	    	$result2 = $this->db->get()->row();
	    	if (!empty($result2)) {
	    		return $result2;
	    	}else{
	    		$this->db->select('*');
				$this->db->from('table_user');
		    	$this->db->where('email', $username);
		    	$this->db->where('password', sha1($pass));
		    	$this->db->where('status', 1);
		    	return $this->db->get()->row();
	    	}
	    }
	}
}