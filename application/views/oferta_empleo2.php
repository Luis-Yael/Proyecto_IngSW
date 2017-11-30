  <?php  
 ?>
  <br><br>
<div class="container">
       <h2 class="text-center">OFERTAS DE EMPLEO</h2>     
       <br><br>
  <table class="table table-dark table-hover">
    <thead>
      <tr >
        <th>Empresa</th>
        <th>Oferta de empleo</th>
     
      </tr>
    </thead>
    <tbody>
      <?php   $i=1;

        foreach($ofertas->result() as $fila) { ?>
       <?php if ($fila ->puesto != ""){?>
        <form  id="form<?php echo $i;?>" name="form<?php echo $i;?>" action="<?php echo base_url();?>index.php/welcome/registro_candidato" >

          <tr class="table-primary"  >

                <td><p style="color:black">        
                         <input type="text" class="form-control" id="empresa<?php echo $i;?>" value="<?=$fila ->nombre_emp?>"  readonly="readonly">
                </p></td>
                <td><p style="color:black"><?=$fila ->puesto?></p></td>
                <td style="text-align:center;"> 
                          <button type="submit"  class="btn btn-warning">Solicitar empleo</button> 
                     <div class="form-group">
     <?php echo form_error('empresa'.$i);?>
  
    </div>
                </td>
         </tr>
   
            </form>    <?php      $i++;   }}?> 
     <tr>
    
     </tr>
  
    </tbody>
  </table>

    <style>
          table, th, td {
                       border: 2px solid black;
                        }
    </style>
</div>

      <?php  

?>