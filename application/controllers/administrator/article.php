<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('marticle');
        if($this->session->userdata('login_user') == FALSE){
            redirect(base_url('administrator/dashboard/login/'));
        }
    }
    // manage function
    public function manage(){
        $data['title'] = 'Manage Article | Administrator';
        $data['path_content'] = 'admin/article/manage-article';
       $this->form_validation->set_rules('search','Search','required');

        if(!$this->form_validation->run()){
        // Ngeload data
        $perpage = 20;
        $this->load->library('pagination'); // load libraray pagination
        $config['base_url'] = base_url($this->uri->segment(1).'/corporate/identity/'); // configurate link pagination
        $config['total_rows'] = $this->marticle->countArticle();// fetch total record in databae using load
        $config['per_page'] = $perpage; // Total data in one page
        $config['uri_segment'] = 4; // catch uri segment where locate in 4th posisition
        $choice = $config['total_rows']/$config['per_page'] = $perpage; // Total record divided by total data in one page
        $config['num_links'] = 3; // Rounding Choice Variable
        $config['use_page_numbers'] = TRUE;
        $this->pagination->initialize($config); // intialize var config
        $page = ($this->uri->segment(4))? $this->uri->segment(4) : 0; // If uri segment in 4th = 0 so this program not catch the uri segment
        $data['results'] = $this->marticle->fetchArticle($config['per_page'],$page,$this->uri->segment(4)); // fetch data using limit and pagination
        $data['links'] = $this->pagination->create_links(); // Make a variable (array) link so the view can call the variable
        $data['total_rows'] = $this->marticle->countArticle(); // Make a variable (array) link so the view can call the variable
       $this->load->view('admin/dashboard', $data);
        }
        else{
            $data['results'] = $this->mcorporate->fetchCorporateSearch($_POST); // fetch data using limit and pagination
            $data['links'] = false;
            $this->load->view('admin/dashboard', $data);
        }
    }
    public function manage_page(){
        $data['title'] = 'Manage Page | Administrator';
        $data['path_content'] = 'admin/article/manage-page';
         $this->form_validation->set_rules('search','Search','required');

        if(!$this->form_validation->run()){
        // Ngeload data
        $perpage = 20;
        $this->load->library('pagination'); // load libraray pagination
        $config['base_url'] = base_url($this->uri->segment(1).'/corporate/identity/'); // configurate link pagination
        $config['total_rows'] = $this->marticle->countPage();// fetch total record in databae using load
        $config['per_page'] = $perpage; // Total data in one page
        $config['uri_segment'] = 4; // catch uri segment where locate in 4th posisition
        $choice = $config['total_rows']/$config['per_page'] = $perpage; // Total record divided by total data in one page
        $config['num_links'] = 3; // Rounding Choice Variable
        $config['use_page_numbers'] = TRUE;
        $this->pagination->initialize($config); // intialize var config
        $page = ($this->uri->segment(4))? $this->uri->segment(4) : 0; // If uri segment in 4th = 0 so this program not catch the uri segment
        $data['results'] = $this->marticle->fetchPage($config['per_page'],$page,$this->uri->segment(4)); // fetch data using limit and pagination
        $data['links'] = $this->pagination->create_links(); // Make a variable (array) link so the view can call the variable
        $data['total_rows'] = $this->marticle->countPage(); // Make a variable (array) link so the view can call the variable
       $this->load->view('admin/dashboard', $data);
        }
        else{
            $data['results'] = $this->mcorporate->fetchCorporateSearch($_POST); // fetch data using limit and pagination
            $data['links'] = false;
            $this->load->view('admin/dashboard', $data);
        }
    }
    public function manage_category(){
        $data['title'] = 'Manage Category | Administrator';
        $data['path_content'] = 'admin/article/manage-category';
         $this->form_validation->set_rules('search','Search','required');

        if(!$this->form_validation->run()){
        // Ngeload data
        $perpage = 20;
        $this->load->library('pagination'); // load libraray pagination
        $config['base_url'] = base_url($this->uri->segment(1).'/corporate/identity/'); // configurate link pagination
        $config['total_rows'] = $this->marticle->countCategory();// fetch total record in databae using load
        $config['per_page'] = $perpage; // Total data in one page
        $config['uri_segment'] = 4; // catch uri segment where locate in 4th posisition
        $choice = $config['total_rows']/$config['per_page'] = $perpage; // Total record divided by total data in one page
        $config['num_links'] = 3; // Rounding Choice Variable
        $config['use_page_numbers'] = TRUE;
        $this->pagination->initialize($config); // intialize var config
        $page = ($this->uri->segment(4))? $this->uri->segment(4) : 0; // If uri segment in 4th = 0 so this program not catch the uri segment
        $data['results'] = $this->marticle->fetchCategory($config['per_page'],$page,$this->uri->segment(4)); // fetch data using limit and pagination
        $data['links'] = $this->pagination->create_links(); // Make a variable (array) link so the view can call the variable
        $data['total_rows'] = $this->marticle->countCategory(); // Make a variable (array) link so the view can call the variable
       $this->load->view('admin/dashboard', $data);
        }
        else{
            $data['results'] = $this->mcorporate->fetchCorporateSearch($_POST); // fetch data using limit and pagination
            $data['links'] = false;
            $this->load->view('admin/dashboard', $data);
        }
    }

    // add function 
    public function add_article(){
        $data['title'] = 'Add Article | Administrator';
        $data['path_content'] = 'admin/article/add-article';
        $this->form_validation->set_rules('title','Title','required');
        $this->form_validation->set_rules('article','Article','required');
        $data['error'] = false;
        if(!$this->form_validation->run()){
            $this->load->view('admin/dashboard',$data);
        }
        else{
            // upload poto
            $config['upload_path'] = './asset/asset-admin/img';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2000';
            $config['file_name'] = 'image-'.$this->mod->urlFriendly($this->input->post('title')).date('Y-m-d_H-i-s');
            $this->load->library('upload',$config);

            if(!$this->upload->do_upload()){
                $data['error'] = $this->upload->display_errors();
                $this->load->view('admin/dashboard',$data);
            }
            else{
                $images = $this->upload->data();
            // save data
            $data = $_POST;
            $array = array(
                    'title' => $data['title'],
                    'article' => $data['article'],
                    'id_user' => $this->session->userdata('id_user'),
                    'image_article' => 'asset/asset-admin/img/'.$images['file_name'],
                    'date_article' => date('Y-m-d H-i-s')
                );
            $this->mod->saveData($array,'article');

            redirect(base_url('administrator/article/manage'));
        }
    }
}
    public function add_page(){
        $data['title'] = 'Add Page | Administrator';
        $data['path_content'] = 'admin/article/add-page';
        $data['category'] = $this->mod->fetchAllData('category');
        $this->form_validation->set_rules('title_page','Title Page','required');
        $this->form_validation->set_rules('id_category','Category Name','required');
        $this->form_validation->set_rules('page','Page','required');
        if(!$this->form_validation->run()){
            $this->load->view('admin/dashboard',$data);
        }
        else{
            // save data
            $data = $_POST;
            $array = array(
                    
                    'title_page' => $data['title_page'],
                    'page' => $data['page'],
                    'id_user' => $this->session->userdata('id_user'),
                    'id_category' => $data['id_category']

                );
            $this->mod->saveData($array,'page');
            redirect(base_url('administrator/article/manage-page'));
        }
    }
    public function add_category(){
        $data['title'] = 'Add Category | Administrator';
        $data['path_content'] = 'admin/article/add-category';
         $this->form_validation->set_rules('category','Category Name','required');
        if(!$this->form_validation->run()){
            $this->load->view('admin/dashboard',$data);
        }
        else{
            // save data
            $data = $_POST;
            $array = array(
                    'category' => $data['category']
                );
            $this->mod->saveData($array,'category');

            redirect(base_url('administrator/article/manage-category'));
        }

    }
    
    // edit function
    public function edit_article(){
        $data['title'] = 'Edit Article | Administrator';
        $data['path_content'] = 'admin/article/edit-article';
        $id =$this->uri->segment(4);
        $data['result'] = $this->mod->getDataWhere('article','id_article',$id);
        if($data['result'] == false)
            redirect(base_url('administrator/article/manage-article'));

         $this->form_validation->set_rules('title','Title','required');
         $this->form_validation->set_rules('article','Article','required');
        if(!$this->form_validation->run()){
            $data['error'] = false;
            $this->load->view('admin/dashboard',$data);
        }
        else{
            // upload image
            $config['upload_path'] = './asset/asset-admin/img';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2000';
            $config['file_name'] = 'image-'.$this->mod->urlFriendly($this->input->post('title')).date('Y-m-d_H-i-s');
            $this->load->library('upload',$config);

            if(!$this->upload->do_upload()){
                // save data
                $data = $_POST;
                $array = array(
                    'title' => $data['title'],
                    'article' => $data['article'],
                    'id_user' => $this->session->userdata('id_user'),
                    'date_article' => date('Y-m-d H:i:s')
                );
                $this->mod->editData($array,'article','id_article',$id);
                redirect(base_url($this->uri->segment(1).'/article/manage'));
            } 
            else{
                $this->load->helper('file');
                unlink($data['result']['image_article']);
                $images = $this->upload->data();
                // save data
                $data = $_POST;
                 $array = array(
                    'title' => $data['title'],
                    'article' => $data['article'],
                    'id_user' => $this->session->userdata('id_user'),
                    'image_article' => 'asset/asset-admin/img/'.$images['file_name'],
                    'date_article' => date('Y-m-d H:i:s')
                );
                $this->mod->editData($array,'article','id_article',$id);
                redirect(base_url($this->uri->segment(1).'/article/manage'));
            }
        }
    }
    public function edit_page(){
        $data['title'] = 'Edit Page | Administrator';
        $data['path_content'] = 'admin/article/edit-page';
        $data['category'] = $this->mod->fetchAllData('category');
          $id =$this->uri->segment(4);
        $data['result'] = $this->mod->getDataWhere('page','id_page',$id);
        if($data['result'] == false)
            redirect(base_url('administrator/article/manage-page'));

        $this->form_validation->set_rules('title_page','Title Page','required');
        $this->form_validation->set_rules('id_category','Category Name','required');
        $this->form_validation->set_rules('page','Page','required');
        if(!$this->form_validation->run()){
            $this->load->view('admin/dashboard',$data);
        }
        else{
            // edit data
            $data = $_POST;
            $array = array(
                    'title_page' => $data['title_page'],
                    'page' => $data['page'],
                    'id_user' => $this->session->userdata('id_user'),
                    'id_category' => $data['id_category']
                );
            $this->mod->editData($array,'page','id_page',$id);
            redirect(base_url('administrator/article/manage-page'));
        }
        $this->load->view('admin/dashboard', $data);
         }
     public function edit_category(){
        $data['title'] = 'Edit Category | Administrator';
        $data['path_content'] = 'admin/article/edit-category';
       $id =$this->uri->segment(4);
        $data['result'] = $this->mod->getDataWhere('category','id_category',$id);
        if($data['result'] == false)
            redirect(base_url('administrator/article/manage-category'));

        $this->form_validation->set_rules('category','Category Name','required');
        if(!$this->form_validation->run()){
            $this->load->view('admin/dashboard',$data);
        }
        else{
            // edit data
            $data = $_POST;
            $array = array(
                    'category' => $data['category']
                );
            $this->mod->editData($array,'category','id_category',$id);
            redirect(base_url('administrator/article/manage-category'));
        }
        $this->load->view('admin/dashboard', $data);

    }

    // delete function
    public function delete_article(){
         $id = $this->uri->segment(4);
        $this->mod->deleteData('article','id_article',$id);
        redirect(base_url($this->uri->segment(1).'/article/manage'));
    }
    public function delete_page(){
         $id = $this->uri->segment(4);
        $this->mod->deleteData('page','id_page',$id);
        redirect(base_url($this->uri->segment(1).'/article/manage-page'));
    }
    public function delete_category(){
        $id = $this->uri->segment(4);
        $this->mod->deleteData('category','id_category',$id);
        redirect(base_url($this->uri->segment(1).'/article/manage-category'));
    }


}
