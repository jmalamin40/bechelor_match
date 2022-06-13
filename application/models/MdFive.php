<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class MdFive extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function md5($id)
	{
		$ids= $id*254*3636*14825*42158;
		$idst1= str_replace(0, 'cx_y', $ids);
		$idst2= str_replace(1, 'xw', $idst1);
		$idst3= str_replace(2, 'je', $idst2);
		$idst4= str_replace(3, 'lf', $idst3);
		$idst5= str_replace(4, 'qu', $idst4);
		$idst6= str_replace(5, 'o_d_n', $idst5);
		$idst7= str_replace(6, 'pz', $idst6);
		$idst8= str_replace(7, 'kr', $idst7);
		$idst9= str_replace(8, 'bs-a', $idst8);
		return $idst10= str_replace(9, 'mt', $idst9);
		
	}
	public function decode_md5($id)
	{
		
		$idst1= str_replace('cx_y', 0, $id);
		$idst2= str_replace('xw', 1, $idst1);
		$idst3= str_replace('je', 2, $idst2);
		$idst4= str_replace('lf', 3, $idst3);
		$idst5= str_replace('qu', 4, $idst4);
		$idst6= str_replace('o_d_n', 5, $idst5);
		$idst7= str_replace('pz', 6, $idst6);
		$idst8= str_replace('kr', 7, $idst7);
		$idst9= str_replace('bs-a', 8, $idst8);
		$idst10= str_replace('mt', 9, $idst9);
		return $ids= $idst10/254/3636/14825/42158;
		
	}
}