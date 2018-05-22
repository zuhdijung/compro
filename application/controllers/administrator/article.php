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
        $this->load->view('admin/dashboard', $data);
    }

    public function add_article(){
        $data['path_content'] = 'admin/article/add-article';
        $this->load->view('admin/dashboard', $data);

    }
    public function edit_article(){
        $data['path_content'] = 'admin/article/edit-article';
        $this->load->view('admin/dashboard', $data);
    }
    public function manage_page(){
        $data['path_content'] = 'admin/article/manage-page';
        $this->load->view('admin/dashboard', $data);
    }
     public function add_page(){
        $data['path_content'] = 'admin/article/add-page';
        $this->load->view('admin/dashboard', $data);

    }
    public function edit_page(){
        $data['path_content'] = 'admin/article/edit-page';
        $this->load->view('admin/dashboard', $data);
    }
    public function manage_category(){
        $data['path_content'] = 'admin/article/manage-category';
        $this->load->view('admin/dashboard', $data);
    }
    public function add_category(){
        $data['path_content'] = 'admin/article/add-category';
        $this->load->view('admin/dashboard', $data);

    }
     public function edit_category(){
        $data['path_content'] = 'admin/article/edit-category';
        $this->load->view('admin/dashboard', $data);
    }


}
