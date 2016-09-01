<?php
  /**
   *
   */
  class Loginuser_model extends CI_Model
  {
    var $data_user;
    public $rows=0;
    function __construct()
    {
      parent::__construct();
    }

    function cek_login_user($data)
    {
      $this->load->model('Paneluser_model');
		  $data_user = $this->Paneluser_model->get_data_byConditional($data);
		  if($data_user->num_rows() == 1){
			     $this->rows = $data_user->num_rows();
		  }
		  return $data_user->result();
    }

  }

 ?>
