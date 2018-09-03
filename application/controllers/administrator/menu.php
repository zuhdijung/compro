 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('mmenu');
        if($this->session->userdata('login_user') == FALSE){
            redirect(base_url('administrator/dashboard/login/'));
        }
    }


 public function manage_menu(){
        $data['title'] = 'Manage Menu | Administrator';
        $data['path_content'] = 'admin/menu/manage-menu';
         $this->form_validation->set_rules('search','Search','required');

        if(!$this->form_validation->run()){
        // Ngeload data
        $perpage = 20;
        $this->load->library('pagination'); // load libraray pagination
        $config['base_url'] = base_url($this->uri->segment(1).'/corporate/identity/'); // configurate link pagination
        $config['total_rows'] = $this->mmenu->countMenu();// fetch total record in databae using load
        $config['per_page'] = $perpage; // Total data in one page
        $config['uri_segment'] = 4; // catch uri segment where locate in 4th posisition
        $choice = $config['total_rows']/$config['per_page'] = $perpage; // Total record divided by total data in one page
        $config['num_links'] = 3; // Rounding Choice Variable
        $config['use_page_numbers'] = TRUE;
        $this->pagination->initialize($config); // intialize var config
        $page = ($this->uri->segment(4))? $this->uri->segment(4) : 0; // If uri segment in 4th = 0 so this program not catch the uri segment
        $data['results'] = $this->mmenu->fetchMenu($config['per_page'],$page,$this->uri->segment(4)); // fetch data using limit and pagination
        $data['links'] = $this->pagination->create_links(); // Make a variable (array) link so the view can call the variable
        $data['total_rows'] = $this->mmenu->countMenu(); // Make a variable (array) link so the view can call the variable
       $this->load->view('admin/dashboard', $data);
        }
        else{
            $data['results'] = $this->mcorporate->fetchCorporateSearch($_POST); // fetch data using limit and pagination
            $data['links'] = false;
            $this->load->view('admin/dashboard', $data);
        }
    }
    public function add_menu(){
        $data['title'] = 'Add Menu | Administrator';
        $data['path_content'] = 'admin/menu/add-menu';
         $this->form_validation->set_rules('menu','Menu','required');
         $this->form_validation->set_rules('link_menu','Link Menu','required');
         $this->form_validation->set_rules('id_parent','Parent','numeric');
         $this->form_validation->set_rules('sort_order','Short Order','required|numeric');
        $data['menu'] = $this->mod->fetchDataWhere('menu','id_parent',0);
        if(!$this->form_validation->run()){
            $this->load->view('admin/dashboard',$data);
        }
        else{
            // save data
            $data = $_POST;
            $array = array(
                    'menu' => $data['menu'],
                    'id_parent' => $data['id_parent'],
                    'link_menu' => $data['link_menu'],
                    'internal_link' => $data['internal_link'],
                    'sort_order' => $data['sort_order'],
                    'hierarchy' => $data['hierarchy']
                );
            $this->mod->saveData($array,'menu');
            redirect(base_url('administrator/menu/manage-menu'));
        }

    }
     public function edit_menu(){
        $data['title'] = 'Edit Menu | Administrator';
        $data['path_content'] = 'admin/menu/edit-menu';
        $id = $this->uri->segment(4);
        $data['result'] = $this->mod->getDataWhere('menu','id_menu',$id);
        if($data['result'] == false)
            redirect(base_url('administrator/menu/manage-menu'));

        $this->form_validation->set_rules('menu','Menu','required');
        $this->form_validation->set_rules('id_parent','Parent','required');
         $this->form_validation->set_rules('sort_order','Short Order','required');
        if(!$this->form_validation->run()){
            $this->load->view('admin/dashboard',$data);
        }
        else{
            // edit data
            $data = $_POST;
            $array = array(
                    'menu' => $data['menu'],
                    'id_parent' => $data['id_parent'],
                    'link_menu' => $data['link_menu'],
                    'internal_link' => $data['internal_link'],
                    'sort_order' => $data['sort_order'],
                    'hierarchy' => $data['hierarchy']
                );
            $this->mod->editData($array,'menu','id_menu',$id);
            redirect(base_url('administrator/menu/manage-menu'));
        }
        $this->load->view('admin/dashboard', $data);

    }
    public function delete_menu(){
        $id = $this->uri->segment(4);
        $this->mod->deleteData('menu','id_menu',$id);
        $this->mod->deleteData('menu','id_parent',$id);
        redirect(base_url($this->uri->segment(1).'/menu/manage-menu'));
    }


}