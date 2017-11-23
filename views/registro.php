<div class="container">
  <br><br>
  <h2>Registro Candidato</h2>
  <form  class="p-5 mt-5 formulario-contacto" action="<?php echo base_url();?>index.php/Welcome/subirImagen"  method="POST">

  <!--Aqui va la foto-->
    <div class="form-group">
        <input type="file" name="foto" id="foto" value="Selecciona foto">
    </div>


    <input type="submit" class="btn btn-primary btn-default btn-success btn-lg" value="Registrarse">


       <a href="<?php echo base_url();?>index.php/welcome/registro">
            <button type="button" class="btn btn-default btn-success btn-lg" style="margin: 0 11.1%;margin-top: 0px;">Limpiar formulario</button>
        </a>
  </form>

</div>