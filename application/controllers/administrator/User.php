<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('mpage');
		if($this->session->userdata('login_user') == FALSE){
			redirect(base_url('administrator/dashboard/login/'));
		}
	}

	public function manage_user(){
		$data['path_content'] = 'admin/user/manage-user';
		if($this->session->userdata('login_user') == FALSE){
			redirect(base_url('administrator/dashboard/login/'));
		}
		$this->load->view('admin/dashboard', $data);
	}

	 public function add(){
        $data['path_content'] = 'administrator/user/add-user';
        if($this->session->userdata('login_user') == FALSE){
            redirect(base_url('administrator/dashboard/login/'));
        }
        $this->load->view('admin/dashboard', $data);

    }
}
