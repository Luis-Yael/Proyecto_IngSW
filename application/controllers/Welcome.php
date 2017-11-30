<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
function __construct()
    {
    parent::__construct();
     $this->load->model('bases_model');
     $this->load->library('grocery_CRUD');
    }

	public function index()	{
		$this->load->view('header_ofertas');
    $data["ofertas"]=$this->bases_model->getOfertas();
		$this->load->view('oferta_empleo2',$data);
		$this->load->view('footer');

	}


    public function login() {
    $this->load->view('header_login');
    $this->load->view('entrar_o_registrar');
    $this->load->view('footer');

  }
	  public function _example_output($output)
    {
      $this->load->view('header_evaluador');
      $this->load->view('blanco');
      $this->load->view('example.php',(array)$output);
      $this->load->view('footer');
    }
     

		public function candidato(){
		$this->load->view('header_candidato');
		$this->load->view('candidato');
		$this->load->view('footer');

	}
	public function empresa(){
		$this->load->view('header_empresa');
		$this->load->view('candidato');
		$this->load->view('footer');

	}

				public function registro_candidato(){
				$this->load->view('header_login');
				$this->load->view('registro_candidato');
				$this->load->view('footer');

	}

	
		public function enlace_registro(){
				$this->load->view('header_enl_registro');
			$this->load->view('enlace_registro');
			$this->load->view('footer');

		

	}

				public function registro_empresa(){
				$this->load->view('header_enl_registro2');
				$this->load->view('registro_empresa');
				$this->load->view('footer');

	}


		public function oferta_empleo(){
		$this->load->view('header_ofertas');
		$this->load->view('oferta_empleo');
		$this->load->view('footer');

	}
public function administrador(){
  
}

	public function validaLogin(){


    $this->form_validation->set_rules('login','login','required');
    $this->form_validation->set_rules('pwd','pwd','required');

  if ($this->form_validation->run() != FALSE){
 
	     $login=$this->input->post('login',TRUE);
       $password=$this->input->post('pwd',TRUE);
       $data = array(
               'login'=> $login,'password'=>$password,);
      $usuario= $data["usuario"]=$this->bases_model->validaLogin($data);
    

    if ($usuario==FALSE) {
         $usuario= $data["usuario"]=$this->bases_model->validaLogin2($data);
         if($usuario==FALSE){
            $usuario= $data["usuario"]=$this->bases_model->validaLogin3($data);
            if($usuario==FALSE){
              echo ("no entre morro");
                 redirect('\Welcome\login','refresh');
            }else{//aqui viene el administrador
                 foreach($usuario->result() as $row)
                {$datasession = array(
                'login'=> $row->login_eval,
                'password'=> $row->pwd_eval,
                'nivel_usuario'=> $row->nivel_usuario
                );}
                $this->session->set_userdata($datasession);
                if($datasession['nivel_usuario']==3){
                   redirect('\Welcome\evaluador','refresh');
                    }
            }


          }else{
                foreach($usuario->result() as $row)
                {$datasession = array(
                'login'=> $row->login_empresa,'password'=> $row->pwd_empresa,
                'nivel_usuario'=> $row->nivel_usuario,
                'id_empresa'=> $row->id_empresa,
                'nombre_emp'=> $row->nombre_emp,);}
                $this->session->set_userdata($datasession);
                if($datasession['nivel_usuario']==2){
                    $this->load->view('header_empresa',$data);
                    $this->load->view('candidato');
                    $this->load->view('footer');
                    }
     }

    }else {


     foreach($usuario->result() as $row)
          {$datasession = array(
            'login'=> $row->login_cand,'password'=> $row->pwd_cand,
            'nivel_usuario'=> $row->nivel_usuario,
            'habilidades'=> $row->habilidades,'nombre_cand'=> $row->nombre_cand,
            'ap_paterno'=> $row->ap_paterno,
            'ap_mateno'=> $row->ap_materno,
            'id_candidato'=> $row->id_candidato);}
             $this->session->set_userdata($datasession);
                  if($datasession['nivel_usuario']==1){
              redirect('\Welcome\candidato','refresh');
              }

        }//if principal para candidatos
           
       	 }else{
          redirect('\Welcome\login','refresh');
         }
	}

public function inserta_candidato(){
  $this->form_validation->set_rules('nombre','nombre','required');
  $this->form_validation->set_rules('paterno','paterno','required');
  $this->form_validation->set_rules('materno','materno','required');
  $this->form_validation->set_rules('email','email','required');
  $this->form_validation->set_rules('telmov','tel.mov','required');
  $this->form_validation->set_rules('telfijo','tel-fijo','required');
  $this->form_validation->set_rules('login','login','required');
  $this->form_validation->set_rules('pwd','pwd','required');

    if ($this->form_validation->run() != FALSE){
      $nombre=$this->input->post('nombre',TRUE);
      $paterno=$this->input->post('paterno',TRUE);
      $materno=$this->input->post('materno',TRUE);
      $email=$this->input->post('email',TRUE);
      $telmov=$this->input->post('telmov',TRUE);
      $telfijo=$this->input->post('telfijo',TRUE);
      $login=$this->input->post('login',TRUE);
      $password=$this->input->post('pwd',TRUE);
 
 
      $data = array(
               'nombre'=> $nombre,
               'paterno'=>$paterno,
               'materno'=>$materno,
               'email'=>$email,
               'telmov'=>$telmov,
               'telfijo'=>$telfijo,
               'login'=>$login,
               'password'=>$password);
              $this->bases_model->inserta_candidato($data);
                 redirect('\Welcome\login','refresh');
          
      }

}


public function inserta_empresa(){
  $this->form_validation->set_rules('nombre_emp','nombre_emp','required');
  $this->form_validation->set_rules('nomjefe','nomjefe','required');
  $this->form_validation->set_rules('telmov','telmov','required');
  $this->form_validation->set_rules('login','login','required');
  $this->form_validation->set_rules('pwd','pwd','required');

    if ($this->form_validation->run() != FALSE){
      $nombre_emp=$this->input->post('nombre_emp',TRUE);
      $nomjefe=$this->input->post('nomjefe',TRUE);
      $telmov=$this->input->post('telmov',TRUE);
      $login=$this->input->post('login',TRUE);
      $password=$this->input->post('pwd',TRUE);
 
 
      $data = array(
               'nombre_emp'=> $nombre_emp,
               'nomjefe'=>$nomjefe,
               'telmov'=>$telmov,
               'login'=>$login,
               'password'=>$password);
            $this->bases_model->inserta_empresa($data);
                 redirect('\Welcome\login','refresh');          
      }else echo ("no entre");

}



public function cerrar_sesion(){
   $datasession = array('login' => '');
        $this->session->unset_userdata($datasession);
       $this->session->sess_destroy();
       redirect('/Welcome/login/', 'refresh');
}

  public function mostrar_ofertas() {
    $this->load->view('header_candidato');
    $data["ofertas"]=$this->bases_model->getOfertas();
    $this->load->view('oferta_empleo',$data);
    $this->load->view('footer');

  }

  public function pedir_trabajo(){
    $data["id"]=$this->uri->segment(3);
    $data2["id2"]=$this->uri->segment(4);
    $empresa["empresa"]=$this->bases_model->getEmpresa($data);
    $empresa["lalo"]=$this->bases_model->validaLogin4($data2);
    $this->load->view('header_candidato');
    $this->load->view('enviar_datos_a_empresa',$empresa);
    $this->load->view('footer');

  }

  public function completar_solcand(){
    $this->load->view('header_candidato');
    $this->load->view('llenar_solicitud_cand');
    $this->load->view('footer');
  }
  public function subirimagen()
  {
    $config['upload_path']='./assets/uploads/files/';
    $config['allowed_types']='jpg|png|jpeg|JPEG|PNG';
    $config['max_size']='512000';
    $config['max_width']='3024';
    $config['max_heigth']='4448';

    $this->load->library('upload',$config);

    /*Aqui agregue codigo*/
    if (!$this->upload->do_upload("foto")) 
    {
      $data['error']=$this->upload->display_errors();
      $this->load->view('index');
      $this->load->view('footer');
    }else
    {
      $file_info=$this->upload->data();
      $imagen=$file_info['file_name'];
      $subir=$this->bases_model->subir($imagen);
    }
  }

  public function completar_registrocand(){
  $this->form_validation->set_rules('id_candidato','id_candidato','required');
  $this->form_validation->set_rules('retribucion','retribucion','required');
  $this->form_validation->set_rules('jornada','jornada','required');
  $this->form_validation->set_rules('grado','grado','required');
  $this->form_validation->set_rules('habilidades','habilidades','required');
  /*$this->form_validation->set_rules('foto','foto','required');*/
  
    if ($this->form_validation->run() != FALSE){
      $id_candidato=$this->input->post('id_candidato',TRUE);
      $retribucion=$this->input->post('retribucion',TRUE);
      $jornada=$this->input->post('jornada',TRUE);
      $grado=$this->input->post('grado',TRUE);

      $nivel_grado="";
      if($grado=="bachiller"){
          $nivel_grado="1";
      }
       if($grado=="licenciatura"){
          $nivel_grado="2";
      }
       if($grado=="maestria"){
          $nivel_grado="3";
      }

      $habilidades=$this->input->post('habilidades',TRUE);
      /*$foto=$this->input->post('foto',TRUE);*/
      /*Configuracio para la imagen*/
      $config['upload_path']='./assets/uploads/files/';
      $config['allowed_types']='jpg|png|jpeg|JPEG|PNG';
      $config['max_size']='512000';
      $config['max_width']='3024';
      $config['max_heigth']='4448';

      $this->load->library('upload',$config);
      $this->upload->do_upload("foto");
      /*if(!$this->upload->do_upload("foto")){
         $data['error']=$this->upload->display_errors();
       }else{*/
          $file_info=$this->upload->data();
          $foto=$file_info['file_name'];
          $data = array(
                    'id_candidato'=>$id_candidato,
                   'retribucion'=> $retribucion,
                   'jornada'=>$jornada,
                   'grado'=>$grado,
                   'habilidades'=>$habilidades,
                   'nivel_grado'=>$nivel_grado,
                   'foto'=>$foto,);
         
             $this->bases_model->completar_registrocand($data);

                  redirect('\Welcome\completar_solcand','refresh');  
       /*}*/
       
      }else echo ("no entre");    
  }
      public function completar_registroemp(){
          $this->form_validation->set_rules('id_empresa','id_empresa','required');
          $this->form_validation->set_rules('dir','dir','required');
          $this->form_validation->set_rules('correo','correo','required');
          $this->form_validation->set_rules('puesto','puesto','required');
          $this->form_validation->set_rules('desc','desc','required');
          $this->form_validation->set_rules('rango','rango','required');
          $this->form_validation->set_rules('jornada','jornada','required');
          $this->form_validation->set_rules('req','req','required');
  /*$this->form_validation->set_rules('foto','foto','required');*/

          if ($this->form_validation->run() != FALSE){
            $id_empresa=$this->input->post('id_empresa',TRUE);
            $dir=$this->input->post('dir',TRUE);
            $correo=$this->input->post('correo',TRUE);
            $puesto=$this->input->post('puesto',TRUE);
            $desc=$this->input->post('desc',TRUE);
            $rango=$this->input->post('rango',TRUE);
            $jornada=$this->input->post('jornada',TRUE);
            $req=$this->input->post('req',TRUE);
         /*   $foto=$this->input->post('foto',TRUE);*/
       
            $data = array(
                      'id_empresa'=>$id_empresa,
                     'dir'=> $dir,
                     'correo'=>$correo,
                     'puesto'=>$puesto,
                     'rango'=>$rango,
                     'desc'=>$desc,
                     'jornada'=>$jornada,
                    'req'=>$req,
                    /* 'foto'=>$foto*/);
               $this->bases_model->completar_registroemp($data);

              redirect('\Welcome\completar_sol_emp','refresh');   
            }else echo ("no entre");

    }

  public function enviar_datos_dbemp(){
     $this->form_validation->set_rules('id_candidato','id_candidato','required');
       $this->form_validation->set_rules('empresa','empresa','required');
       $this->form_validation->set_rules('telefono','telefono','required');
       $this->form_validation->set_rules('nombre','nombre','required');
       $this->form_validation->set_rules('habilidades','habilidades','required');

                     $id_candidato=$this->input->post('id_candidato',TRUE);
                    $empresa=$this->input->post('empresa',TRUE);
                    $telefono=$this->input->post('telefono',TRUE);
                    $nombre=$this->input->post('nombre',TRUE);
                    $habilidades=$this->input->post('habilidades',TRUE);
                 /*   $foto=$this->input->post('foto',TRUE);*/
               
                    $data = array(
                              'id_candidato'=>$id_candidato,
                             'empresa'=> $empresa,
                             'telefono'=> $telefono,
                             'nombre'=>$nombre,
                             'habilidades'=>$habilidades,
                           );
                         $this->bases_model->enviar_datos_dbemp($data);
                         redirect('\Welcome\mostrar_ofertas','refresh'); 
  }



  public function resul(){
    $this->load->view('header_candidato');
    $data["ofertas"]=$this->bases_model->getOfertas();
    $this->load->view('resul');
    $this->load->view('footer');
  }





  public function completar_sol_emp(){
         $this->load->view('header_empresa');
         $this->load->view('completar_sol_emp');
         $this->load->view('footer');
  }

  public function informe_candidatos(){
        $data["id"]=$this->uri->segment(3);
    $sol["sol"]=$this->bases_model->getSolicitudes($data);
    if ($sol==NULL) {
          redirect('\Welcome\empresa','refresh');
    }else{
               $this->load->view('header_empresa');
    $this->load->view('informes_candidatos',$sol);
    $this->load->view('footer');
    } 
 
  }

  public function evaluador(){
        $this->load->view('header_evaluador');
        $this->load->view('candidato');
        $this->load->view('footer');
  }
  public function ofertas_empresas(){
        $this->load->view('header_evaluador');
         $data["ofertas"]=$this->bases_model->getOfertas();

        $this->load->view('ofertas_empresas',$data);
        $this->load->view('footer');
  }


  public function mostrar_emp(){
   
    $data["id"]=$this->uri->segment(3);
     $tel=$this->uri->segment(4);
    
    $this->load->view('header_evaluador');

    $solicitud["solicitud"]=$this->bases_model->getVista($data);
    if ($solicitud==FALSE) {
redirect('\welcome\ofertas_empresas','refresh');
 /*   $solicitud["habilidades"]=$this->bases_model->getHabilidades($data);*/
   }else{
    $this->load->view('mostrar_emp',$solicitud);
    $this->load->view('footer');
    }
  }
      public function mensaje_usuario(){
          $data["id"]=$this->uri->segment(3);
           $datos["nombre"]=$this->uri->segment(4);
           $datos["telefono"]=$this->uri->segment(5);
          $datos["usuario"]=$this->bases_model->getUsuario($data);
         
           $this->load->view('header_evaluador');
              $this->load->view('mensaje_usuario' ,$datos);              
             $this->load->view('footer');
    }

    public function enviar_aceptacion(){
        $this->form_validation->set_rules('nombre','nombre','required');
       $this->form_validation->set_rules('id_candidato','id_candidato','required');
       $this->form_validation->set_rules('empresa','empresa','required');
       $this->form_validation->set_rules('telefono','telefono','required');
 
                    $nombre=$this->input->post('nombre',TRUE);
                    $id_candidato=$this->input->post('id_candidato',TRUE);
                    $empresa=$this->input->post('empresa',TRUE);
                    $telefono=$this->input->post('telefono',TRUE);
                 
             
               
                    $data = array(
                              'nombre'=>$nombre,
                             'id_candidato'=> $id_candidato,
                             'empresa'=>$empresa,
                             'telefono'=>$telefono,
                            
                           );
                         $this->bases_model->enviar_aceptacion($data);
                          redirect('welcome/ofertas_empresas','refresh'); 

    
     }   

     public function resultados(){
    $data["id"]=$this->uri->segment(3);
    $this->load->view('header_candidato');
    $datos["aceptados"]=$this->bases_model->getResultados($data);
    $this->load->view('resul',$datos);
    $this->load->view('footer');
     }


      public function mostrar_candidatos(){
        
             try{
            $crud = new grocery_CRUD();
            $crud->set_table('candidato');
            $crud->set_theme('datatables');
           
            $crud->columns('id_candidato','nombre_cand','ap_paterno','ap_materno','email_cand','foto');
            $crud->required_fields('id_candidato','nombre_cand');
            $crud->display_as('id_candidato','ID');
            $crud->display_as('nombre_cand','Nombre');
            $crud->display_as('ap_paterno','Apellido Paterno');
            $crud->display_as('ap_materno','Apellido Materno');
            $crud->display_as('email_cand','E-mail');
            $crud->display_as('foto','Foto');
            $crud->set_field_upload('foto','assets/uploads/files');
            $crud->unset_add();
            $crud->unset_edit();
            $output = $crud->render();
            $this->_example_output($output);
          }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
          }

    }


          public function mostrar_empresas(){
        
             try{
            $crud = new grocery_CRUD();
            $crud->set_table('empresa');
            $crud->set_theme('datatables');
           
            $crud->columns('id_empresa','nombre_emp','jefe_personal');
            $crud->required_fields('id_empresa');
            $crud->unset_add();
            $crud->unset_edit();
            $output = $crud->render();
            $this->_example_output($output);
          }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
          }

    }

}