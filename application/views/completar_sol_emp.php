<?php if($this->session->userdata('nivel_usuario')=='2'){;
 $id_empresa=$this->session->userdata('id_empresa');
 ?>
<div class="container">
  <br><br>
  <h2>Completar Datos de Empresa</h2>
  <form  class="p-5 mt-5 formulario-contacto" action="<?php echo base_url();?>index.php/welcome/completar_registroemp"  method="POST">

    <div class="form-group" style="visibility:hidden"  >
      <input type="text" class="form-control" id="id_empresa" name="id_empresa"  value="<?=$id_empresa?>" readonly="readonly">
    </div>
    <div class="form-group">
      
      <label name="direccion">Direccion postal de la empresa</label>
      <input type="text" class="form-control" id="dir" name="dir" placeholder="Direccion postal" required>
    </div>
      <div class="form-group">
      <label name="correo">Correo electronico</label>
      <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo" required>
    </div>
        <div class="form-group">
      <label name="puesto">Puesto</label>
      <input type="text" class="form-control" id="puesto" name="puesto" placeholder="Nombre del puesto que se solicita">
    </div>
      <div class="form-group">
      <label name="desc">Descripcion del puesto que se solicita</label>
      <input type="text" class="form-control" id="desc" name="desc" placeholder="Descripcion del puesto que se solicita">
    </div>
     <div class="form-group">
      <label name="rango">Rango de salario</label>
      <input type="text" class="form-control"  id="rango" placeholder="salario" name="rango" required>
    </div>
    <div class="form-group">
      <label name="jornada">Jornada laboral</label>
      <input type="text" class="form-control"  id="joranada" placeholder="jornada" name="jornada" required>
    </div>
      <div class="form-group">
              <label for="requisitos">Requisitos</label>
              <input id="req" class="form-control" name="req" type="text"  required placeholder="requisitos">
    </div>

    <button type="submit" class="btn btn-primary btn-default btn-success btn-lg">Completar</button>
       <a href="<?php echo base_url();?>index.php/welcome/llenar_solicitud_cand">
            <button type="button" class="btn btn-default btn-success btn-lg" style="margin: 0 11.1%;margin-top: 0px;">Limpiar formulario</button>
        </a>
  </form>

</div>
   <?php }
else
  redirect('/Welcome/login/', 'location');
?>