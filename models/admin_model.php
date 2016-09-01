<?php
  /**
   *
   */
  class Admin_model extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }

    function update_statusbayar($id_user, $data){
      $this->db->where("id_user", $id_user);
      return $this->db->update("user", $data);
    }

    function get_data_pembeli(){
		    $this->db->where("statusbeli", "true");
		    $query = $this->db->get("user");
		    return $query->row();
	  }

    function get_data_pemilik(){
  		$query = $this->db->get("pemilik");
  		return $query->result();
  	}
  }

 ?>
