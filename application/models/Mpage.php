<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpage extends CI_Model {
	// constrcutor
	function __construct(){
		parent::__construct();
	}
	function countPage(){
		return $this->db->count_all_results('page');
	}

	function fetchPage($limit,$start,$pagenumber) {
	    if($pagenumber!="")
	      $this->db->limit($limit,($pagenumber*$limit)-$limit);
	    else
	      $this->db->limit($limit,$start);
	    $this->db->order_by('id_page','DESC');
	    
	    $query = $this->db->get('page');
	    if($query->num_rows()>0){
	      return $query->result();
	    }
	    else return FALSE;
	}
}