<?php
  /**
   *
   */
  class Loginpemilik_model extends CI_Model
  {
    var $data_pemilik;
    public $rows=0;
    function __construct()
    {  b .
      parent::__construct();
    }

    function cek_login_pemilik($data)
    {
      $this->load->model('Paneluser_model');
		  $data_pemilik = $this->Panelpemilik_model->get_data_byConditional($data);
		  if($data_pemilik->num_rows() == 1){
			     $this->rows = $data_pemilik->num_rows();
		  }
		  return $data_pemilik->result();
    }

  }

 ?>
