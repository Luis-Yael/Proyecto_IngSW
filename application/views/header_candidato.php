<?php if($this->session->userdata('nivel_usuario')=='1'){
  $id_candidato=$this->session->userdata('id_candidato');
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pagina Candidato</title>
    <link rel="stylesheet" href="<?php echo base_url();?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Italianno|Lato:400,700,900|Raleway:400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>css/styles.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  </head>
  <body>
    
    <header class="encabezado-sitio container">
        <div class="row justify-content-between">
              <div class="col-8 offset-2 col-lg-4 offset-lg-0">
                  <a href="<?php echo base_url();?>index.php/welcome/index">
                    <br>
                      <img src="<?php echo base_url();?>img/logo_bueno.png" class="img-fluid mx-auto d-block">
                  </a>
              </div>
              
              <div class="col-12 col-lg-4">
                  <nav class="sociales text-center text-md-right pt-3">
                      <ul><br>
                        <a href="<?php echo base_url();?>index.php/welcome/cerrar_sesion">
                          <button class="btn btn-warning btn-sm">Cerrar Sesion</button>
                          </a>
                      </ul>
                  </nav>
              </div>
          </div> <!--.row-->
    </header>
    
    <div class="navegacion mt-3 py-1">
        <nav class="nav-principal">
            <div class="container">
                <ul class="nav nav-justified flex-column flex-sm-row">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>index.php/welcome/index">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>index.php/welcome/mostrar_ofertas">Ofertas de Trabajo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>index.php/welcome/completar_solcand">Completar Perfil</a>
                    </li>
                 
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>index.php/welcome/resultados/<?php echo $id_candidato;?>">Resultados</a>
                    </li>
                   

                </ul>
            </div>
        </nav>
    </div><!--.navegacion-->
    <?php }
else
  redirect('/Welcome/login/', 'location');
?>