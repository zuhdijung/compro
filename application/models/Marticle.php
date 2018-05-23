<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Marticle extends CI_Model {
	// constrcutor
	function __construct(){
		parent::__construct();
	}
	function countArticle(){
		return $this->db->count_all_results('article');
	}

	function fetchArticle($limit,$start,$pagenumber) {
	    if($pagenumber!="")
	      $this->db->limit($limit,($pagenumber*$limit)-$limit);
	    else
	      $this->db->limit($limit,$start);
	    $this->db->order_by('id_article','DESC');
	    
	    $query = $this->db->get('article');
	    if($query->num_rows()>0){
	      return $query->result();
	    }
	    else return FALSE;
	}
	function countCategory(){
		return $this->db->count_all_results('category');
	}

	function fetchCategory($limit,$start,$pagenumber) {
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