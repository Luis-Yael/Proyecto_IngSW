<div class="container">
  <br><br>
  <h2>Registro Candidato</h2>
  <form  class="p-5 mt-5 formulario-contacto" action="<?php echo base_url();?>index.php/welcome/inserta_candidato"  method="POST">
    <div class="form-group">
      <label name="nombre">Nombre</label>
      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
    </div>
      <div class="form-group">
      <label name="paterno">Apellido Paterno</label>
      <input type="text" class="form-control" id="paterno" name="paterno" placeholder="Escribe tu apellido paterno" required>
    </div>
      <div class="form-group">
      <label name="materno">Apeliido Materno</label>
      <input type="text" class="form-control" id="materno" name="materno" placeholder="Escribe tu apellido materno">
    </div>
    <div class="form-group">
      <label name="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="E-mail" name="email" required>
    </div>
      <div class="form-group">
      <label name="tel">Telefono Movil</label>
      <input type="text" class="form-control" id="telmov" placeholder="Telefono movil" name="telmov" required>
    </div>

      <div class="form-group">
      <label name="tel">Telefono Fijo</label>
      <input type="text" class="form-control" id="telfijo" placeholder="Telefono fijo" name="telfijo" required>
    </div>

  <div class="form-group">
      <label name="login">Login</label>
      <input type="text" class="form-control" id="login" placeholder="Ingresa Login" name="login" required>
    </div>

  <div class="form-group">
      <label name="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
    </div>


    <button type="submit" class="btn btn-primary btn-default btn-success btn-lg">Registrarse</button>


       <a href="<?php echo base_url();?>index.php/welcome/registro_candidato">
            <button type="button" class="btn btn-default btn-success btn-lg" style="margin: 0 11.1%;margin-top: 0px;">Limpiar formulario</button>
        </a>
  </form>

</div>