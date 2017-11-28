<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class bases_model extends CI_Model {

  function __construct()
    {parent::__construct();}

    public function _example_output($output = null)
    {
      
      $this->load->view('example.php',(array)$output);
      $this->load->view('footer');
    }


    	public function validaLogin($data){
		    $cadena="select login_cand,pwd_cand from candidato where login_cand='".$data['login']."' and pwd_cand='".$data['password']."'";
		
		    $query = $this->db->query($cadena);
		      if ($query->num_rows() > 0)
		        return $query;
		      else
		        return FALSE;
  }

  public function subir($data){
      $cadena="insert into candidato(foto) values('$data')";
      echo var_dump($cadena);
      $query = $this->db->query($cadena);
          
  }
}