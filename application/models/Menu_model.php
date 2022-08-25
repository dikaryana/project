<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model
{ 
  public function __construct()
{
  parent::__construct();
  
  
  $this->load->model(array('Menu_model'));
}
    public function getsubMenu()
    {
        $query = "SELECT `user_sub_menu` .*, `user_menu`.`menu`
        FROM `user_sub_menu` JOIN `user_menu` 
        ON `user_sub_menu`.`menu_id` = `user_menu`.`id`";
  return  $this->db->query($query)->result_array();
}
public function hapus_data($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
	}
 
}