<?php

  class Dashboard_model extends CI_Model {
    private $key, $table;

    function __construct()
    {
      parent::__construct();
      $this->$table="dashboard";
      $this->key="id_kosan";
    }

    function get_data_byConditional($condition){
      $this->db->where($condition);
      $query = $this->db->get($this->table);
      return $query;
    }

    function get_all(){
      $query = $this->db->get($this->table);
      return $query->result();
    }

    function get_data_byid_kosan($id_kosan){
      $this->db->where($this->key, $$id_kosan);
      $query = $this->db->get($this->table);
      return $query->row();
    }

  }

 ?>
