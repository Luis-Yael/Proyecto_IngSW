<?php if($this->session->userdata('nivel_usuario')=='1'){
  $nombre=$this->session->userdata('login');; 
 ?>
  <br><br>
<div class="container">
       <h2 class="text-center">OFERTAS DE EMPLEO</h2>     
       <br><br>
  <table class="table table-dark table-hover">
    <thead>
      <tr >
        <th>Estatus</th>
         <th style="text-align: center">Mensaje</th>
       
     
      </tr>
    </thead>
    <tbody>
      <?php   if ($aceptados !=NULL){?>
      <?php   $i=1;
  
        foreach($aceptados->result() as $fila) { ?>
     
        
          <tr class="table-primary"  >
  <td><p style="color:black">Aceptado</p></td>
                <td ><p style="color:black">        
              
                         <textarea  name="" id="" style="height: 70px;width: 1000px;" readonly="readonly">Has sido seleccionado por la empresa <?=$fila ->Empresa?> por favor presentate en nuestra oficinas lo antes posible. Marca al telefono: <?=$fila ->telefono?></textarea>
                </p></td>
              
        
         </tr>
   
            <?php      $i++;   }}



            ?> 
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
       <?php }
else
  redirect('/Welcome/login/', 'location');
?>