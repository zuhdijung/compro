<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('mpage');
        if($this->session->userdata('login_user') == FALSE){
            redirect(base_url('administrator/dashboard/login/'));
        }
    }

    public function manage(){
        $data['path_content'] = 'admin/category/manage-category';
        if($this->session->userdata('login_user') == FALSE){
            redirect(base_url('administrator/dashboard/login/'));
        }
        $this->load->view('admin/dashboard', $data);
    }

     public function add_category(){
        $data['path_content'] = 'admin/category/add-category';
        if($this->session->userdata('login_user') == FALSE){
            redirect(base_url('administrator/dashboard/login/'));
        }
        $this->load->view('admin/dashboard', $data);

    }
    public function edit_category(){
        $data['path_content'] = 'admin/category/edit-category';
        if ($this->session->userdata('login_user') == FALSE) {
            redirect(base_url('administrator/dashboard/login'));
        }
        $this->load->view('admin/dashboard', $data);

    }
}
