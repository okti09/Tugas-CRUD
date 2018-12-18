<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_table extends CI_Model {

	public function getdata($key){
		$this->db->where('ID_Creator', $key);
		$hasil = $this->db->get('mata09');
	}	
	public function getupdate($key,$data)
 {
  $this->db->where('ID_Creator', $key);
  $this->db->update('mata09', $data);
 }

 public function getinsert($data)
 {
  $this->db->insert('mata09',$data);
 }

 public function getdelete($key)
 {
  $this->db->where('ID_Creator', $key);
  $this->db->delete('mata09');
 }
}