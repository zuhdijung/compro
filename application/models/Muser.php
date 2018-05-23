<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Muser extends CI_Model {
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
	function countUser(){
		return $this->db->count_all_results('user');
	}

	function fetchUser($limit,$start,$pagenumber) {
	    if($pagenumber!="")
	      $this->db->limit($limit,($pagenumber*$limit)-$limit);
	    else
	      $this->db->limit($limit,$start);
	    $this->db->order_by('id_user','DESC');
	    
	    $query = $this->db->get('user');
	    if($query->num_rows()>0){
	      return $query->result();
	    }
	    else return FALSE;
	}
}