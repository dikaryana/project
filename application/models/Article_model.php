<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article_model extends CI_Model
{
	
	public function get()
	{
        return  $this->db->get('article')->result_array();
	}
  

    public function get_data()
	{
        return  $this->db->get('article')->result();
	}

	public function list_DataArticle() 
    {
        $this->db->order_by('id', 'ASC');
        return $this->db->from('article')
          ->get()
          ->result();
    }  


	public function get_published($limit = null, $offset = null)
	{
		if (!$limit && $offset) {
			$query = $this->db
				->get_where($this->_table, ['draft' => 'FALSE']);
		} else {
			$query =  $this->db
				->get_where($this->_table, ['draft' => 'FALSE'], $limit, $offset);
		}
		return $query->result();
	}

	public function find_by_slug($slug)
	{
		if (!$slug) {
			return;
		}
		$query = $this->db->get_where($this->_table, ['slug' => $slug]);
		return $query->row();
	}

	public function find($id)
	{
			
		return $this->db->get_where('article', array('id' => $id))->row();
	}

	public function input($data)
	{
		return $this->db->insert('article', $data);
	}

	public function edit($where,$data,$table){		
		return $this->db->get_where($table,$where);
		
	}

	public function get_id($id){
	return $this->db->get_where('article',['id'=>$id])->row_array();
 
	}
	 public function update_data($id){
		$data = array(
                
            'title'=>$this->input->post('title'),
            'author'=>$this->input->post('author'),
            'kategori'=>$this->input->post('kategori'),
            'content'=>$this->input->post('content'),
            'image'=>$this->input->post('image'),
            'draft' => $this->input->post('draft')
            );
		$this->db->where('id',$id);
        $this->db->update('article',$data);
	}	

	public function hapus_data($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
	}
}