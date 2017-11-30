<div id="fondo_negro">
<div id="fondos">

    <div class="container">
    <div class="row">

        <main class="col-12 col-md-10 offset-md-1  col-lg-8 offset-lg-2 contenido-principal">


        <form  class="p-5 mt-5 formulario-contacto" action="<?php echo base_url();?>index.php/Welcome/validaLogin" method="POST">
              <div class="form-group">
                <h1>Bienvenido</h1>
                  <br><br>
                <label for="login">Login:</label>
                <input type="text" class="form-control" id="login" name="login" required>
              </div>
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" name="pwd" required>
              </div>
              <div class="form-check">
            
              </div>
              <br><br>

                  <a href="<?php echo base_url();?>index.php/welcome/enlace_registro">
                            <button type="button" class="btn btn-primary text-uppercase" style="background-color: orange" >Registrar</button>
                  </a>
                  <input type="submit" class="btn btn-primary text-uppercase" name="Ingresar" value="Iniciar Sesion" id="ingresar" class="col-12">
              
        </form>

        </main>
   
    </div>
<br><br><br>
</div>
</div>
</div>

