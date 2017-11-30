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
     
        <?php foreach($ofertas->result() as $fila) { ?>
          <tr class="table-primary"  >
                <td><p style="color:black"><?=$fila ->nombre_emp?></p></td>
                <td><p style="color:black"><?=$fila ->puesto?></p></td>
         </tr>

              <?php } ?> 
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