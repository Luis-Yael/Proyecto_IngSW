<br><br>
<?php 
$nombre=$this->session->userdata('nombre_cand')." ".$this->session->userdata('ap_paterno')." ".$this->session->userdata('ap_mateno');
$id_candidato=$this->session->userdata('id_candidato');



foreach($empresa->result() as $fila){?>
<div class="container">

  <form class="p-5 mt-5 formulario-contacto" action="<?php echo base_url();?>index.php/welcome/enviar_datos_dbemp"  method="POST">
  <h2>Ponte en contacto con la empresa <?=$fila ->nombre_emp?></h2>
<div class="form-group" style="visibility:hidden"  >
      <input type="text" class="form-control" id="id_candidato" name="id_candidato"  value="<?=$id_candidato?>" readonly="readonly">
    </div>

     <div class="form-group">
      <label for="empresa">Empresa:</label>
      <input type="text" class="form-control" id="empresa" name="empresa" value="<?=$fila ->nombre_emp?>" readonly="readonly">
    </div>
        <div class="form-group">
      <label for="telefono">Telefono:</label>
      <input type="text" class="form-control" id="telefono" name="telefono" value="<?=$fila ->telefono?>" readonly="readonly">
    </div>
    <div class="form-group">
      <label for="Nombre">Nombre del solicitante:</label>
      <input type="text" class="form-control" id="nombre" name="nombre" value="<?=$nombre?>"  readonly="readonly">
    </div>
<?php foreach($lalo->result() as $fila){ ?>
      <div class="form-group">
          <label for="habilidades">Habilidades:</label>
          <input type="text" class="form-control" id="habilidades" name="habilidades" value="<?=$fila ->habilidades?>"  readonly="readonly">
    </div>
   
    <button type="submit" class="btn btn-primary"  >Enviar</button>
  </form>

 
</div>

  <?php  

  }}?>
