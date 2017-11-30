<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bases_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}

    public function _example_output($output = null)
    {
      
      $this->load->view('example.php',(array)$output);
      $this->load->view('footer');
    }


    	public function validaLogin($data){
		    $cadena="select * from candidato where login_cand='".$data['login']."' and pwd_cand='".$data['password']."'";
		
		    $query = $this->db->query($cadena);
		//echo var_dump($query);
		      if ($query->num_rows() > 0)
		        return $query;
		      else
		        return FALSE;
  			}


  			public function validaLogin2($data){
		    $cadena="select * from empresa where login_empresa='".$data['login']."' and pwd_empresa='".$data['password']."'";
		
		    $query = $this->db->query($cadena);
		//echo var_dump($query);
		      if ($query->num_rows() > 0)
		        return $query;
		      else
		        return FALSE;
  			}

  			public function validaLogin3($data){
		    		$cadena="select * from evaluador where login_eval='".$data['login']."' and pwd_eval='".$data['password']."';";
		    		
		
		$query = $this->db->query($cadena);
	
		      if ($query->num_rows() > 0)
		        return $query;
		      else
		        return FALSE;
  			}


    	public function validaLogin4($data){
		    $cadena="select habilidades from candidato where login_cand='".$data['id2']."';";
		    $query = $this->db->query($cadena);
		      if ($query->num_rows() > 0)
		        return $query;
		      else
		        return FALSE;
  			}

  public function getOfertas(){
  	$cadena="SELECT id_empresa,nombre_emp,puesto,telefono FROM `empresa`";
  	$query = $this->db->query($cadena);
  	 if ($query->num_rows() > 0)
		        return $query;
		      else
		        return FALSE;
  }

    public function getEmpresa($data){
  	$cadena="SELECT * FROM `empresa` WHERE id_empresa='".$data["id"]."';";
  	$query = $this->db->query($cadena);
  	 if ($query->num_rows() > 0)
		        return $query;
		      else
		        return FALSE;
  }

      public function getEmpresa2($data){
  	$cadena="SELECT * FROM `empresa` WHERE nombre_emp='".$data["id"]."';";
  	$query = $this->db->query($cadena);
  	 if ($query->num_rows() > 0)
		        return $query;
		      else
		        return FALSE;
  }



  public function getResultados($data){
  	$cadena="SELECT * FROM `aceptados` WHERE id_candidato='".$data['id']."';";
  	$query = $this->db->query($cadena);
  	 if ($query->num_rows() > 0)
		        return $query;
		      else
		        return FALSE;
  }

  public function inserta_candidato($data){
  	$cadena2="ALTER TABLE candidato AUTO_INCREMENT=1";
	$query2 = $this->db->query($cadena2);
  	$cadena="INSERT INTO `candidato` (`id_candidato`, `nombre_cand`, `ap_paterno`, `ap_materno`, `email_cand`, `tel_fijo`, `tel_movil`, `login_cand`, `pwd_cand`, `retribucion`, `jornada`, `grado_est`, `nivel_estudio`, `habilidades`, `foto`, `nivel_usuario`) VALUES (
  		NULL, '".$data['nombre']."','".$data['paterno']."','".$data['materno']."','".$data['email']."','".$data['telmov']."','".$data['telfijo']."','".$data['login']."','".$data['password']."', '', '', '', '', '', '','1');";
  		$query = $this->db->query($cadena);

  } 


   public function inserta_empresa($data){
$cadena2="ALTER TABLE empresa AUTO_INCREMENT=1";
	$query2 = $this->db->query($cadena2);

  	$cadena="INSERT INTO `empresa` (`id_empresa`, `nombre_emp`, `jefe_personal`, `telefono`, `login_empresa`, `pwd_empresa`, `dir_postal`, `email_emp`, `puesto`, `desc_puesto`, `rango_salarial`, `jornada_laboral`, `req_puesto`, `ofertas_trabajo`, `nivel_usuario`) VALUES (NULL, '".$data['nombre_emp']."','".$data['nomjefe']."','".$data['telmov']."','".$data['login']."','".$data['password']."', '', '', '', '', '', '', '', '', '2');";


  		$query = $this->db->query($cadena);
  

  }


  public function completar_registrocand($data){
  	$cadena="UPDATE candidato Set retribucion='".$data['retribucion']."', jornada='".$data['jornada']."', grado_est='".$data['grado']."', habilidades='".$data['habilidades']."',  foto='".$data['foto']."',nivel_estudio='".$data['nivel_grado']."' Where id_candidato='".$data['id_candidato']."';";
  	$this->db->query($cadena);

  }

  public function completar_registroemp($data){
  	$cadena="UPDATE empresa set dir_postal='".$data['dir']."', email_emp='".$data['correo']."', puesto='".$data['puesto']."', desc_puesto='".$data['desc']."', rango_salarial='".$data['rango']."', jornada_laboral='".$data['jornada']."',req_puesto='".$data['req']."' where id_empresa='".$data['id_empresa']."';";
  	$this->db->query($cadena);
  }

  public function enviar_datos_dbemp($data){
  	$cadena2="ALTER TABLE solicitudes_empleo AUTO_INCREMENT=1";
	$query2 = $this->db->query($cadena2);
$verifica="SELECT * FROM `solicitudes_empleo` WHERE empresa='".$data['empresa']."' and id_candidato='".$data['id_candidato']."';";
$query1 = $this->db->query($verifica);
 		if ($query1->num_rows() > 0)
		        return FALSE;
		      else{

  	$cadena="INSERT INTO `solicitudes_empleo` (`id_solicitud`, `id_candidato`, `empresa`, `nombre_cand`, `habilidades_candidato`, `cita_emp`) VALUES (NULL, '".$data['id_candidato']."','".$data['empresa']."','".$data['nombre']."','".$data['habilidades']."', '".$data['telefono']."');";

$query = $this->db->query($cadena);
}
  }


  public function getSolicitudes($data){
  $cadena="SELECT * FROM `solicitudes_empleo` WHERE empresa='".$data["id"]."';";
  	$query = $this->db->query($cadena);
  	 if ($query->num_rows() > 0)
		        return $query;
		      else
		        return FALSE;
  }

    public function getVista($data){
  $cadena="SELECT * FROM `vdatos1` WHERE empresa='".$data["id"]."';";
  	$query = $this->db->query($cadena);
  	 if ($query->num_rows() > 0)
		        return $query;
		      else
		        return FALSE;
  }


      public function getUsuario($data){
  $cadena="SELECT * FROM `candidato` WHERE id_candidato='".$data["id"]."';";
  	$query = $this->db->query($cadena);
  	 if ($query->num_rows() > 0)
		        return $query;
		      else
		        return FALSE;
  }


  public function getHabilidades($data){
  $cadena="SELECT habiliades FROM `candidato` WHERE habilidades='".$data["id"]."';";
  	$query = $this->db->query($cadena);
  	 if ($query->num_rows() > 0)
		        return $query;
		      else
		        return FALSE;
  }

		public function enviar_aceptacion($data){
			$cadena="UPDATE candidato set habilidades='' where id_candidato='".$data['id_candidato']."';";
			$this->db->query($cadena);
			$cadena1="UPDATE empresa set puesto='' where nombre_emp='".$data['empresa']."';";
				$query = $this->db->query($cadena1);
			$cadena2="UPDATE solicitudes_empleo set habilidades_candidato='' where id_candidato='".$data['id_candidato']."';";
				$query = $this->db->query($cadena2);
			$cadena3="UPDATE vdatos1  set habilidades_candidato='' where id_candidato='".$data['id_candidato']."';";
		    $query = $this->db->query($cadena3);

		    $cadena4="INSERT INTO `aceptados` (`id_aceptado`, `Empresa`, `id_candidato`, `telefono`) VALUES (NULL, '".$data['empresa']."', '".$data['id_candidato']."','".$data['telefono']."');";

		       $query = $this->db->query($cadena4);
		}
}