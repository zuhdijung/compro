<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('mpage');
        if($this->session->userdata('login_user') == FALSE){
            redirect(base_url('administrator/dashboard/login/'));
        }
    }

    public function manage(){
        $data['path_content'] = 'admin/article/manage-article';
        if($this->session->userdata('login_user') == FALSE){
            redirect(base_url('administrator/dashboard/login/'));
        }
        $this->load->view('admin/dashboard', $data);
    }

    public function add_article(){
        $data['path_content'] = 'admin/article/add-article';
        if($this->session->userdata('login_user') == FALSE){
            redirect(base_url('administrator/dashboard/login/'));
        }
        $this->load->view('admin/dashboard', $data);

    }
    public function edit_article(){
        $data['path_content'] = 'admin/article/edit-article';
        if($this->session->userdata('login_user') == FALSE){
            redirect(base_url('administrator/dashboard/login/'));
        }
        $this->load->view('admin/dashboard', $data);
    }
}
