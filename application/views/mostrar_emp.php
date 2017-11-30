
<?php if($this->session->userdata('nivel_usuario')=='3'){
 ?>

<div class="container">
       <br><h2 class="text-center">OFERTAS DE EMPLEO</h2>     
       <br><br>
  <table class="table table-dark table-hover">
    <thead>
      <tr >
        <th>Candidato</th>
        <th>Habilidades</th>
        <th>Grado de estudio</th>
        <th>Puesto de la empresa</th>
        <th>Telefono</th>
        <th>Boton</th>

     
      </tr>
    </thead>
    <tbody>
      <?php   $i=1;
  if ($solicitud==NULL) {
    # code...
  }else{
        foreach($solicitud->result() as $fila) { ?>
      

        <form  id="form<?php echo $i;?>" name="form<?php echo $i;?>" action="<?php echo base_url();?>index.php/welcome/mensaje_usuario/<?php echo $fila ->id_candidato;?>/<?php echo $fila ->empresa;?>/<?php echo $fila ->telefono;?>" method="POST">
    <?php if ($fila ->habilidades_candidato != ""){?>
          <tr class="table-primary" >

                <td><p style="color:black">        
                         <input type="text" class="form-control" id="empresa<?php echo $i;?>" value="<?=$fila ->nombre_cand?>"  readonly="readonly">
                </p>
                </td>
                <td><p style="color:black"><?=$fila ->habilidades_candidato?></p></td>

                <td>  <p style="color:black"><?=$fila ->grado_est?></p></td>
                  <td>
                              <p style="color:black"><?=$fila ->puesto?></p>
                </td>
     
                <td><?=$fila ->telefono?></td>







                       <td style="text-align:center;"> 
                          <button type="submit"  class="btn btn-warning">Enviar solicitud de aceptacion</button> 
 
                </td>


         </tr>
   
            </form>    <?php      $i++;   }}}?> 
     <tr>
    
     </tr>
  
    </tbody>
  </table>

    <style>
          table, th, td {
                       border: 0px solid black;
                        }
    </style>
</div>
       <?php }else
  redirect('/Welcome/login/', 'location');
?>