<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('mpage');
        if($this->session->userdata('login_user') == FALSE){
            redirect(base_url('administrator/dashboard/login/'));
        }
    }

    public function manage(){
        $data['path_content'] = 'admin/page/manage-page';
        if($this->session->userdata('login_user') == FALSE){
            redirect(base_url('administrator/dashboard/login/'));
        }
        $this->load->view('admin/dashboard', $data);
    }

     public function add_page(){
        $data['path_content'] = 'admin/page/add-page';
        if($this->session->userdata('login_user') == FALSE){
            redirect(base_url('administrator/dashboard/login/'));
        }
        $this->load->view('admin/dashboard', $data);

    }
    public function edit_page(){
        $data['path_content'] = 'admin/page/edit-page';
        if ($this->session->userdata('login_user') == FALSE) {
            redirect(base_url('administrator/dashboard/login'));
        }
        $this->load->view('admin/dashboard', $data);

    }
}
