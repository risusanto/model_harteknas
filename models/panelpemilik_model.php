<?php
/**
 *
 */
class Panelpemilik_model extends CI_Model
{
  private $key,$table;
  var $config;
  var $foto;
  private $keykosan;
  private $tablekosan;
  var $query;
  function __construct()
  {
    parent::__construct();
    $this->key="id_pemilik";
    $this->table="pemilik";
    $this->keykosan="id_kosan"
  }

  public function get_data_byid_pemilik($id_pemilik)
  {
    $this->db->where($this->key, $$id_pemilik);
    $query = $this->db->get($this->table);
    return $query->row();
  }

  function get_data_byConditional($condition){
    $this->db->where($condition);
    $query = $this->db->get($this->table);
    return $query;
  }

  function do_upload_fotoprofil($id_pemilik){
    $config = array (
    'file_name' 	=> $id_pemilik.'.png',
    'upload_path'	=> '/foto/profil/pemilik',
    'allowed_types' => 'jpg|jpeg|gif|png',
    'max_size' 		=> 2000
    );
    $this->load->library('upload', $config);
    $this->upload->do_upload();
  }

  function do_upload_fotokosan($id_kosan,$keterangan){ //keterangan disini diisi dengan angka 1-4 (menunjukan foto ke 1, ke 2, dst)
    $config = array (
    'file_name' 	=> $id_kosan.'_'.$keterangan.'.png',
    'upload_path'	=> '/foto/kosan',
    'allowed_types' => 'jpg|jpeg|gif|png',
    'max_size' 		=> 5000
    );
    $this->load->library('upload', $config);
    $this->upload->do_upload();
  }

  function insert($data){
    return $this->db->insert($this->table, $data);
  }
}

 ?>
