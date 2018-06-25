<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmenu extends CI_Model {
	// constrcutor
	function __construct(){
		parent::__construct();
	}
	function countMenu(){
		return $this->db->count_all_results('menu');
	}

	function fetchMenu($limit,$start,$pagenumber) {
	    if($pagenumber!="")
	      $this->db->limit($limit,($pagenumber*$limit)-$limit);
	    else
	      $this->db->limit($limit,$start);
	    $this->db->order_by('sort_order','DESC');
	    
	    $this->db->where('id_parent', 0); 
	    $query = $this->db->get('menu');
	    if($query->num_rows()>0){
	      return $query->result();
	    }
	    else return FALSE;
	}
}