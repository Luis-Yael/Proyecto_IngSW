
<div class="container">
	<h2>Insertar imagen</h2>
	<form action="<?php echo base_url();?>index.php/Welcome/subirimagen" method="POST" enctype="multipart/form-data">
		<!--<div class="form-group">
			<input type="text" name="habilidad" id="habilidad" placeholder="Ingresa habilidad">
		</div>-->
		<div class="form-group">
        	<input type="file" name="foto" id="foto" accept=".jpg, .jpeg, .png">
    	</div>
		<button type="submit" class="btn btn-primary">Enviar</button>
	</form>	
</div>
