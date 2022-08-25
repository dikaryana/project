<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Article extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model(array('Article_model'));
  }
  
public function data_article(){
	$data['article']= $this->Article_model->get_data()->result(); 
	$this->load->view('articles/list_article', $data);
}

    public function index()
  	{
      $data['article'] = $this->Article_model->get();
      
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('articles/list_article', $data);
      $this->load->view('templates/footer');
     
    }
    public function new()
	  {
		if ($this->input->method() == 'post') {
			// TODO: Lakukan validasi sebelum menyimpan ke model

			// generate unique id and slug
			$id = uniqid('', true);
			$slug = url_title($this->input->post('title'), 'dash', TRUE) . '-' . $id;

			$article = [
				'id' => $id,
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'image' => $this->input->post('image'),
				'content' => $this->input->post('content'),
				'draft' => $this->input->post('draft')
			];

			$saved = $this->Article_model->insert($article);
			

			if ($saved) {
				$this->session->set_flashdata('message', 'Article was created');
				return redirect('articles/list_article');
			}
		}

		$this->load->view('articles/post_new_form.php');
	}

	public function edit($id = null)
	{
		$data['article'] = $this->article_model->find($id);

		if (!$data['article'] || !$id) {
			show_404();
		}

		if ($this->input->method() === 'post') {
			// TODO: lakukan validasi data seblum simpan ke model
			$article = [
				'id' => $id,
				'title' => $this->input->post('title'),
				'content' => $this->input->post('content'),
				'draft' => $this->input->post('draft')
			];
			$updated = $this->article_model->update($article);
			if ($updated) {
				$this->session->set_flashdata('message', 'Article was updated');
				redirect('admin/post');
			}
		}

		$this->load->view('admin/post_edit_form.php', $data);
	}

	public function delete($id = null)
	{
		if (!$id) {
			show_404();
		}

		$deleted = $this->article_model->delete($id);
		if ($deleted) {
			$this->session->set_flashdata('message', 'Article was deleted');
			redirect('admin/post');
		}
	}
}