<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Table extends CI_Controller {

	public function index() {
  $this->load->model('model_table');
  $isi['data'] = $this->db->get('mata09');
  $this->load->view('view_table', $isi );
 }
 public function tambah() {
  $isi['ID'] = '';
  $isi['creator'] = '';
  $isi['Konten'] = '';
  $this->load->view('view_formtable', $isi );
}

 public function edit() {
  $isi['content'] = 'view_formtable';
  $isi['sub_judul'] = 'edit table'; 

  $key = $this->uri->segment(3);
  $this->db->where('ID_Creator', $key);
  $query = $this->db->get('mata09');
  if($query->num_rows()>0)
  {
   foreach ($query->result() as $row) 
   {
    $isi['ID'] = $row->ID_Creator;
    $isi['creator'] = $row->Creator;
    $isi['Konten'] = $row->Konten;
   }
  }
  else {
    $isi['ID'] = '';
    $isi['creator'] = '';
    $isi['Konten'] = '';
  }
  $this->load->view('view_formtable', $isi );
   

 }

 public function simpan() {
  $key     = $this->input->post('ID');
  $data['ID_Creator']  = $this->input->post('ID');
  $data['creator']  = $this->input->post('creator');
  $data['Konten']  = $this->input->post('Konten');

  $this->load->model('model_table');
  $query = $this->model_table->getdata($key);
  if($query)
  {
   $this->model_table->getupdate($key,$data);
   $this->session->set_flashdata('info','data sukses di update');
  }
  else
  {
   $this->model_table->getinsert($data);
   $this->session->set_flashdata('info','data sukses di simpan');
  }
  redirect('table/tambah');
 }

 public function delete() {
  $this->load->model('model_table');

  $key = $this->uri->segment(3);
  $this->db->where('ID_Creator', $key);
  $query = $this->db->get('mata09'); 
  if($query)
  {
   $this->model_table->getdelete($key);
  } 
  redirect('table');
 }

}
