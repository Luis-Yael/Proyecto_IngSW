<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
    {
     parent::__construct();
     $this->load->model('bases_model');
     $this->load->library('grocery_CRUD');
    }

     public function _example_output($output = null)
    {
      
      $this->load->view('example.php',(array)$output);
      $this->load->view('footer');
    }


	public function index()	{
		$this->load->view('header_inicio');
		$this->load->view('imagen');
		redirect('/Welcome/mostrarCand','refresh');
		/*$this->load->view('entrar_o_registrar');*/
		$this->load->view('footer');

	}

	public function mostrarCand(){
		try{
	      $crud = new grocery_CRUD();
	      $crud->set_table('candidato');
	      $crud->columns('nombre_cand','ap_paterno','ap_materno','tel_fijo','foto', 'jornada');
	      $crud->set_theme('datatables');
	      $crud->required_fields('nombre_cand');
	      $crud->display_as('nombre_cand','Nombre');
	      $crud->display_as('ap_paterno','Apellido Paterno');
	      $crud->set_field_upload('foto','assets/uploads/files');
	      $this->load->view('header_candidato');
	      /*$this->load->view('');*/
	      $output = $crud->render();
	      $this->_example_output($output);
	    }catch(Exception $e){
	      show_error($e->getMessage().' --- '.$e->getTraceAsString());
	    }
	}

		public function candidato(){
		$this->load->view('header_candidato');
		$this->load->view('candidato');
		$this->load->view('footer');

	}
			public function empresa(){
		$this->load->view('header_candidato');
		$this->load->view('candidato');
		$this->load->view('footer');

	}

	public function registro(){
	
	$this->load->view('registro');
	

	}

	
		public function enlace_registro(){
			$this->load->view('header_registro');
			$this->load->view('enlace_registro');
			$this->load->view('footer');

	}

				public function registro_empresa(){
				$this->load->view('header_ofertas');
				$this->load->view('registro_empresa');
				$this->load->view('footer');

	}


		public function oferta_empleo(){
		$this->load->view('header_ofertas');
		$this->load->view('oferta_empleo');
		$this->load->view('footer');

	}

	public function enviar_datos_candidato(){
		$this->load->view('header_candidato');
		$this->load->view('candidato');
		$this->load->view('footer');
	}

		public function enviar_datos_empresa(){
		$this->load->view('header_empresa');
		$this->load->view('empresa');
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

	public function validaLogin()
	{













		
    $this->form_validation->set_rules('login','login','required');
    $this->form_validation->set_rules('pwd','pwd','required');


    if ($this->form_validation->run() == true){
	    $login=$this->input->post('login',TRUE);
       $password=$this->input->post('pwd',TRUE);
       $data = array(
               'login'=> "erick",'password'=>"123");
       $data["usuario"]=$this->bases_model->validaLoginputo($data);//aqui vamos
    


       	 
		}else echo "no entre";
		   
   /*   if ($data["usuario"]==FALSE){
        $data["usuario"]=$this->bases_model->validaLogin2($data);*/
     /* if ($data["usuario"]==FALSE){
         redirect('/Welcome/login/', 'location');
         }else{
        foreach($data["usuario"]->result() as $row)
          {$datasession = array(
            'CURP'=> $row->CURP,'nombre'=> $row->nombre,
            'paterno'=> $row->paterno,
            'materno'  => $row->materno,
            'foto'  => $row->foto,'login'=> $row->login,
            'password'  => $row->password,);}
         $this->session->set_userdata($datasession);
        redirect('/Welcome/vistaTutor/', 'location');
      }*/
    /*else
       {
        foreach($data["usuario"]->result() as $row)
          {$datasession = array(
            'CURP'=> $row->CURP,'nombre'=> $row->nombre,
            'paterno'=> $row->paterno,
            'materno'  => $row->materno,
            'foto'  => $row->foto,'login'=> $row->login,
            'password'  => $row->password,);}
     	   $this->session->set_userdata($datasession);
     	  redirect('/Welcome/admin/', 'location');
       }*/
     }
 
   
  }





