<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('mpage');
		if($this->session->userdata('login_user') == FALSE){
			redirect(base_url('administrator/dashboard/login/'));
		}
	}

	public function manage(){
		$data['path_content'] = 'admin/gallery/manage-gallery';
		$this->load->view('admin/dashboard', $data);
	}
	 public function add_gallery(){
        $data['path_content'] = 'admin/gallery/add-gallery';
        $this->load->view('admin/dashboard', $data);

    }
    public function edit_gallery(){
    	$data['path_content'] = 'admin/gallery/edit-gallery';
        $this->load->view('admin/dashboard', $data);
    }
}
