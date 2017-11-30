<br><br>
<?php foreach($usuario->result() as $fila){?>
<div class="container">

  <form class="p-5 mt-5 formulario-contacto" action="<?php echo base_url();?>index.php/welcome/enviar_aceptacion"  method="POST">


    <h2> <?php echo $nombre;?> </h2>

    <div class="form-group">
      <label for="Nombre">Nombre del solicitante:</label>
      <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $fila ->nombre_cand;?>"  readonly="readonly">
    </div>
        <div class="form-group">
      <label for="telefono">Telefono:</label>
      <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $telefono;?>"  readonly="readonly">
    </div>
     <div class="form-group">
      <label for="mensaje">Mensaje:</label>
      <input type="text" class="form-control" id="mensaje" name="mensaje" value="Has seleccionado a este candidato"  readonly="readonly">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
<div class="form-group">
      <input type="text" class="form-control" id="id_candidato" name="id_candidato"  value="<?php echo $fila ->id_candidato;?>" readonly="readonly" style="visibility:hidden">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="empresa" name="empresa"  value="<?php echo $nombre;?>" readonly="readonly" style="visibility:hidden">
    </div>

   
    
  </form>

 
</div>

  <?php  

  }?>
