<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller
{
    public function index(){
        $data['title'] ='Dasboard';
        $data['user']= $this->db->get_where('user',
        ['email' => $this->session->userdata('email')]) ->row_array();
        
        $data['count'] = $this->db->query("SELECT count(id) as jumlah FROM article ")->row();
        $data['total'] = $this->db->query("SELECT count(id) as member FROM user ")->row();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    
    }

 
       
    
}