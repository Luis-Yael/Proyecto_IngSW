<div class="container">
  <br><br>
  <h2>Registro Candidato</h2>
  <form  class="p-5 mt-5 formulario-contacto" action="<?php echo base_url();?>index.php/welcome/enviar_datos_candidato"  method="POST">
    <div class="form-group">
      <label name="nombre">Nombre</label>
      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
    </div>
      <div class="form-group">
      <label name="paterno">Apellido Paterno</label>
      <input type="text" class="form-control" id="paterno" name="paterno" placeholder="Escribe tu apellido paterno">
    </div>
      <div class="form-group">
      <label name="materno">Nombre</label>
      <input type="text" class="form-control" id="materno" name="materno" placeholder="Escribe tu nombre materno">
    </div>
    <div class="form-group">
      <label name="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="E-mail" name="email">
    </div>
      <div class="form-group">
      <label name="tel">Telefono Movil</label>
      <input type="text" class="form-control" id="tel-mov" placeholder="Telefono movil" name="tel-mov">
    </div>

      <div class="form-group">
      <label name="tel">Telefono Fijo</label>
      <input type="text" class="form-control" id="tel-fijo" placeholder="Telefono fijo" name="tel-fijo">
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


       <a href="<?php echo base_url();?>index.php/welcome/registro">
            <button type="button" class="btn btn-default btn-success btn-lg" style="margin: 0 11.1%;margin-top: 0px;">Limpiar formulario</button>
        </a>
  </form>

</div>