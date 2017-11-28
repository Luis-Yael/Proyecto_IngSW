<div class="container">
  <br><br>
  <h2>Registro Empresa</h2>
  <form  class="p-5 mt-5 formulario-contacto" action="<?php echo base_url();?>index.php/welcome/enviar_datos_empresa"  method="POST">
    <div class="form-group">
      <label name="nombre-emp">Nombre de la empresa</label>
      <input type="text" class="form-control" id="nombre-emp" name="nombre-emp" placeholder="Escribe el nombre de tu empresa">
    </div>
    <div class="form-group">
      <label name="nom-jefe">Nombre de jefe de personal</label>
      <input type="text" class="form-control" id="nom-jefe" placeholder="Escribe el nombre del jefe de personal de la empresa" name="nom-jefe">
    </div>
      <div class="form-group">
      <label name="tel">Telefono de contacto</label>
      <input type="text" class="form-control" id="tel-mov" placeholder="Telefono movil" name="tel-mov">
    </div>


  <div class="form-group">
      <label name="login">Login</label>
      <input type="text" class="form-control" id="login" placeholder="Login" name="login">
    </div>

  <div class="form-group">
      <label name="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>


    <button type="submit" class="btn btn-primary btn-default btn-success btn-lg">Registrarse</button>


       <a href="<?php echo base_url();?>index.php/welcome/registro_empresa">
            <button type="button" class="btn btn-default btn-success btn-lg" style="margin: 0 11.1%;margin-top: 0px;">Limpiar formulario</button>
        </a>
  </form>

</div>