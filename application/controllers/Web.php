<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Web extends CI_Controller {
	
	public function __construct()
	{
	  parent::__construct();
	  //$this->load->model('Article_model');
	  
	  $this->load->model(array('Article_model'));
	}
	
 
	public function index(){		
	
		$data['article']= $this->Article_model->get_data(); 
		$this->load->view('web/v_index',$data);

	}
	public function artikel(){		
	
		$data['article']= $this->Article_model->get_data(); 
		$this->load->view('web/content',$data);

	}
	
 
}