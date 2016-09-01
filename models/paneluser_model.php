<?php
/**
 *
 */
class Paneluser_model extends CI_Model
{
  private $table;
  private $key;
  var $foto;
  var $config;
  function __construct()
  {
    parent::__construct()
    $this->table="user";
    $this->key="id_user";
  }
  /*function get_data_byid_user($id_user){
    $this->db->where($this->key, $$id_user);
    $query = $this->db->get($this->table);
    return $query->row();
  }*/
  function get_data_byConditional($condition){
    $this->db->where($condition);
    $query = $this->db->get($this->table);
    return $query;
  }

  function update($id_user, $data){
		$this->db->where($this->key, $no_pendaftaran);
		return $this->db->update($this->table, $data);
	}

  function do_upload($id_user){
    $config = array (
    'file_name' 	=> $id_user.'.png',
    'upload_path'	=> '/foto/profil/user',
    'allowed_types' => 'jpg|jpeg|gif|png',
    'max_size' 		=> 2000
    );
    $this->load->library('upload', $config);
    $this->upload->do_upload();
  }

  function insert($data){
    return $this->db->insert($this->table, $data);
  }
}

 ?>
