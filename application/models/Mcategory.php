<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mcategory extends CI_Model {
	// constrcutor
	function __construct(){
		parent::__construct();
	}
	function countCategory(){
		return $this->db->count_all_results('category');
	}

	function fetchACategory($limit,$start,$pagenumber) {
	    if($pagenumber!="")
	      $this->db->limit($limit,($pagenumber*$limit)-$limit);
	    else
	      $this->db->limit($limit,$start);
	    $this->db->order_by('id_category','DESC');
	    
	    $query = $this->db->get('category');
	    if($query->num_rows()>0){
	      return $query->result();
	    }
	    else return FALSE;
	}
}