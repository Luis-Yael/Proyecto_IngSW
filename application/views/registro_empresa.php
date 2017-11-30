<div class="container">
  <br><br>
  <h2>Registro Empresa</h2>
  <form  class="p-5 mt-5 formulario-contacto" action="<?php echo base_url();?>index.php/welcome/inserta_empresa"  method="POST">
    <div class="form-group">
      <label name="empresa">Empresa</label>
      <input type="text" class="form-control" id="nombre_emp" name="nombre_emp" placeholder="Nombre de la empresa" required>
    </div>

        <div class="form-group">
      <label name="nombrejefe">Jefe de la empresa</label>
      <input type="text" class="form-control" id="nomjefe" name="nomjefe" placeholder="Nombre del jefe" required>
    </div>
      <div class="form-group">
      <label name="tel">Telefono Movil</label>
      <input type="text" class="form-control" id="telmov" placeholder="Telefono movil" name="telmov" required>
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


       <a href="<?php echo base_url();?>index.php/welcome/registro_empresa">
            <button type="button" class="btn btn-default btn-success btn-lg" style="margin: 0 11.1%;margin-top: 0px;">Limpiar formulario</button>
        </a>
  </form>

</div>