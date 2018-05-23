<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpage extends CI_Model {
	// constrcutor
	function __construct(){
		parent::__construct();
	}
	function validLogin($username,$password){
		$enc = ')(*belajarkuy!@#';
		$encrypted = md5($enc.$password.$enc);

		$this->db->where('username',$username);
		$this->db->where('password',$encrypted);
		$result = $this->db->get('user');
		if($result->num_rows()>0){
			return $result->row_array();
		}
		else return false;
	}
}