<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
  {
    parent::__construct();
    //$this->load->model('Article_model');
    
    $this->load->model(array('Article_model'));
  }
  

  
    public function index(){
        $data['title'] ='My Profile';
        $data['user']= $this->db->get_where('user',
        ['email' => $this->session->userdata('email')]) ->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
        
    }
    public function editprofile(){
        $data['title'] ='Edit Profile';
        $data['user']= $this->db->get_where('user',
        ['email' => $this->session->userdata('email')]) ->row_array();
    
        $this->form_validation->set_rules ('name','Full Name', 'required|trim');

        if ($this-> form_validation->run()==false){
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/edit', $data);
        $this->load->view('templates/footer');
        }else{
            $name=$this->input->post('name');
            $email=$this->input->post('email');

           
            $config['upload_path']          = './assest/img/profile/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2048;
            
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')){
            $data = array('image' => $this->upload->data());
            $image = $this->upload->data('file_name');
            $this->db->set('image',$image);
           
            }else{
                echo $this->upload->display_errors();

 

            }
            
            
            $this->db->set('name',$name);
            $this->db->set('image',$image);
            $this->db->where('email',$email);
            $this->db->update('user');

            $this->session -> set_flashdata ('message','<div class="alert alert-success" role="alert">
              your profile succes for updated</div>');
                redirect('User');
        }
        
    }
    public function list(){
        $data['title'] ='artikel';
        $data['user']= $this->db->get_where('user',
        ['email' => $this->session->userdata('email')]) ->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/post_list', $data);
        $this->load->view('templates/footer');
        
    }
    public function articles(){
        $data['title'] ='Article';
        $data['user']= $this->db->get_where('user',
        ['email' => $this->session->userdata('email')]) ->row_array();
        
	$data['article']= $this->Article_model->get_data(); 
    $data['article']=$this->Article_model->list_DataArticle();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
        $this->load->view('articles/list_article', $data);
        $this->load->view('templates/footer');
        
    
    }
    public function tambah()
    {
        $this->load->view('user/post_list'); 
    }
    public function simpan_article()
    {
        
       

        $config['upload_path']          = '.assets/img';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2048;
       var_dump('image');
       
       $this->load->library('upload', $config); 

       if (!empty(  $_FILES['image']))
        {
            if(!$this->upload->do_upload('image')){
           $upload_data = $this->upload->data();
           $namaFile = $upload_data['file_name'];
        
           $data = array(
            'title' => $this->input->post('title', TRUE),
            'author'=>$this->input->post('author'),
           'kategori' => $this->input->post('kategori'),
           'content' => $this->input->post('content'),
           'draft' => $this->input->post('draft'),
                
           );

       
            $this->db->insert('article',$data);
           
            redirect('User/articles');
        }else{
            $this->upload->display_errors();
        }
        }}
    
        public function edit($id){
            $data['title'] ='Article';
            $data['user']= $this->db->get_where('user',
            ['email' => $this->session->userdata('email')]) ->row_array();
           //$where = array('id' => $id);
           $data['article']=$this->Article_model->get_id($id);
           $this->Article_model->update_data($id);

           $this->load->view('templates/header', $data);
           $this->load->view('templates/sidebar', $data);
           $this->load->view('templates/topbar', $data);
            $this->load->view('user/v_update_article',$data);
            $this->load->view('templates/footer');
            
        }
           
        
        function update(){
            $id = $this->input->post('id');
            $title = $this->input->post('title');
            $author = $this->input->post('author');
            $kategori = $this->input->post('kategori');
            $content = $this->input->post('content');
            $image = $this->input->post('image');
            $draft= $this->input->post('content');
           
         
            $data = array(
                
            'title'=>$this->input->post('title'),
            'author'=>$this->input->post('author'),
            'kategori'=>$this->input->post('kategori'),
            'content'=>$this->input->post('content'),
            'image'=>$this->input->post('image'),
            'draft' => $this->input->post('draft')
            );
         
            $where = array(
                'id'=>$id
            );
         
            $this->Article_model->update_data($where,$data,'article');
            redirect('User/list');
        }

    public function kategori(){
        $data['title'] ='kategori';
        $data['user']= $this->db->get_where('user',
        ['email' => $this->session->userdata('email')]) ->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/kategori', $data);
        $this->load->view('templates/footer');
        

    }
     public function hapus($id){
        $data['title'] ='Hapus';
        $data['user']= $this->db->get_where('user',
        ['email' => $this->session->userdata('email')]) ->row_array(); 

        
            $where = array('id' => $id);
            $this->Article_model->hapus_data($where,'article');
            
            redirect('User/articles');
    }

}