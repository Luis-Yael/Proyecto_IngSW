<div id="fondo_negro">
<div id="fondos" >

    <div class="container">
    <div class="row">

        <main class="col-12 col-md-10 offset-md-1  col-lg-8 offset-lg-2 contenido-principal">

            <form  class="p-5 mt-5 formulario-contacto" action="<?php echo base_url();?>index.php/welcome/validaLogin" method="POST">
              
                    <h1>Bienvenido</h1>
                  <br><br>

                    <label for="nombre">Usuario</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu Nombre" >
  
         
          
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="password" >
                  
             
       <br><br>
 
                    <a href="<?php echo base_url();?>index.php/welcome/enlace_registro">
                            <button type="button" class="btn btn-success btn-lg" style="margin: 0 11.1%;" >    Registrar</button>
                    </a>

                   
                  <button type="submit" class="btn btn-default btn-success btn-lg" style="margin: 0 11.1%;margin-top: 0px;">Iniciar sesion</button>
                  
          
            </form>
        </main>
   
    </div>

</div>
</div>
</div>

