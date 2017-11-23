<div id="fondo_negro">
<div id="fondos" >

    <div class="container">
    <div class="row">

        <main class="col-12 col-md-10 offset-md-1  col-lg-8 offset-lg-2 contenido-principal">


        <form action="<?php echo base_url();?>index.php/Welcome/validaLogin" method="POST">
              <div class="form-group">
                <label for="login">Email address:</label>
                <input type="text" class="form-control" id="login" name="login">
              </div>
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" name="pwd">
              </div>
              <div class="form-check">
            
              </div>

                  <a href="<?php echo base_url();?>index.php/welcome/enlace_registro">
                            <button type="button" class="btn btn-success btn-lg" style="margin: 0 11.1%;" >    Registrar</button>
                    </a>

              <button type="submit" class="btn btn-primary">Iniciar sesion</button>
              
</form>

                  


       
        </main>
   
    </div>

</div>
</div>
</div>

