<?php if($this->session->userdata('nivel_usuario')=='1'){;
 $id_candidato=$this->session->userdata('id_candidato');
 ?>
<div class="container">
  <br><br>
  <h2>Completar Datos del Candidato</h2>
  <form  class="p-5 mt-5 formulario-contacto" action="<?php echo base_url();?>index.php/welcome/completar_registrocand"  method="POST" enctype="multipart/form-data">

    <div class="form-group" style="visibility:hidden"  >
      <input type="text" class="form-control" id="id_candidato" name="id_candidato"  value="<?=$id_candidato?>" readonly="readonly">
    </div>
    <div class="form-group">
      
      <label name="retribucion">Retribución mínima solicitada</label>
      <input type="text" class="form-control" id="retribucion" name="retribucion" placeholder="Ejemplo $8000" required>
    </div>
      <div class="form-group">
      <label name="jornada">Jornada que puede llevar a cabo</label>
      <input type="text" class="form-control" id="jornada" name="jornada" placeholder="Ejemplo 8am-10pm" required>
    </div>
      <div class="form-group">
        <label name="grado">Maximo grado de estudios</label>
         <select name="grado" id="grado">
            <option value="bachiller"> Bachiller</option>
            <option value="licenciatura">Licenciatura</option>
            <option value="maestria">Maestria</option>
            
         </select>
      
      
    </div>
    <div class="form-group">

      <label name="habilidades">Habilidades que posee</label>
      <input type="text" class="form-control" id="habilidades" placeholder="Habilidades" name="habilidades" required>
    </div>
      <div class="form-group">
              <label for="foto">Selecciona foto</label>
              <input id="foto" name="foto" type="file" class="file" readonly="true">
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