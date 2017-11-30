  
  <br><br>
<div class="container">
       <h2 class="text-center">OFERTAS DE EMPLEO</h2>     
       <br><br>
  <table class="table table-dark table-hover">
    <thead>
      <tr >
        <th>Empresa</th>
        <th>Candidatos</th>
     
      </tr>
    </thead>
    <tbody>
      <?php   $i=1;
  if ($sol==NULL) {}else{
        foreach($sol->result() as $fila) { ?>
        <form  id="form<?php echo $i;?>" name="form<?php echo $i;?>" action="" method="POST">

          <tr class="table-primary"  >

                <td><p style="color:black">        
                         <input type="text" class="form-control" id="solicitud<?php echo $i;?>" value="<?=$fila ->empresa?>"  readonly="readonly">
                </p></td>
                <td><p style="color:black"><?=$fila ->nombre_cand?></p></td>
               
                         
                     <div class="form-group">
        <?php echo form_error('empresa'.$i);?>

  
    </div>
              
         </tr>
   
           </form>        <?php      $i++;   } }?> 
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
