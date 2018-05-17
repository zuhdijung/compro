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
		if($this->session->userdata('login_user') == FALSE){
			redirect(base_url('administrator/dashboard/login/'));
		}
		$this->load->view('admin/dashboard', $data);
	}
	 public function add(){
        $data['path_content'] = 'administrator/gallery/add-gallery';
        if($this->session->userdata('login_user') == FALSE){
            redirect(base_url('administrator/dashboard/login/'));
        }
        $this->load->view('admin/dashboard', $data);

    }
}
