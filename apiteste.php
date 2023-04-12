<!DOCTYPE html>
 <html>
 <head>
      <title>Exemplo 01 - Consumindo via php</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </head>
 <body>
 <table class="table table-dark">
  <thead>
    <tr>
        
      <th scope="col">nome</th>
      <th scope="col">tipo</th>
      <th scope = "col">fraqueza</th>
      <th scope= "col">imagem</th>
      
    </tr>
  </thead>
  <tbody>
  <?php
    
    $url ="https://www.canalti.com.br/api/pokemons.json" ;
    $resultado = json_decode(file_get_contents($url)) ;
 
    
    
    
  foreach($resultado->pokemon as $pokemons){
    echo "<tr>";
    
    
    echo "<td>". $pokemons->name."</td>";
    
       
     
    echo "<td>"; 
    foreach($pokemons->type as $tipo){
        echo $tipo. "<br>";  

        }
       echo "</td>";

    echo "<td>";
     foreach($pokemons->weaknesses as $fraqueza){
        echo $fraqueza. "<br>";
     }  
     echo "</td>";
       
        
        
        echo "<td>"."<img src =$pokemons->img >"."</td>";
        
        
        echo "</tr>";
        
    }
    
   
  ?>


  </tbody>
</table>

      
 </body>
 </html>