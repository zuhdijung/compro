<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mgallery extends CI_Model {
	// constrcutor
	function __construct(){
		parent::__construct();
	}
	function countGallery(){
		return $this->db->count_all_results('gallery');
	}

	function fetchGallery($limit,$start,$pagenumber) {
	    if($pagenumber!="")
	      $this->db->limit($limit,($pagenumber*$limit)-$limit);
	    else
	      $this->db->limit($limit,$start);
	    $this->db->order_by('id_gallery','DESC');
	    
	    $query = $this->db->get('gallery');
	    if($query->num_rows()>0){
	      return $query->result();
	    }
	    else return FALSE;
	}
	function fetchViewGallery($limit,$start,$pagenumber,$id) {
	    if($pagenumber!="")
	      $this->db->limit($limit,($pagenumber*$limit)-$limit);
	    else
	      $this->db->limit($limit,$start);
	    $this->db->order_by('id_image_gallery','DESC');
	    
	    $this->db->where('id_gallery',$id);
	    $query = $this->db->get('image_gallery');
	    if($query->num_rows()>0){
	      return $query->result();
	    }
	    else return FALSE;
	}
}