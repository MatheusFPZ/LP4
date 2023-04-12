<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">

    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
   <script type="text/javascript">
        $(document).ready(function () {
            $('#tabela').DataTable({
                "pageLength": 10
            });
        });
    </script>

</head>
<body>
<table id= "tabela" class="table table-dark table-striped" >
  <thead>
    <tr>
      <th scope="col">nome</th>
      <th scope="col">altura</th>
      <th scope="col">peso</th>
      <th scope="col">genero</th>
      <th scope="col">filmes</th>
    </tr>
  </thead>
  <tbody>

    <?php


        $url = "https://swapi.dev/api/people";
        $resultado = json_decode(file_get_contents($url));
        while($resultado->next){

          foreach($resultado-> results as $personagens){
           echo "<tr>";
           echo "<td>". $personagens->name."</td>";
           echo "<td>".$personagens->height."</td>";
            echo "<td>".$personagens->mass."</td>";
            echo "<td>".$personagens->gender."</td>";
            
            
            echo "<td>";
            foreach($personagens->films as $filmes){
                $filmess = json_decode(file_get_contents($filmes));
                
                echo $filmess->title."<br>";
                
            }
            echo "</td>";
            echo "</tr>";
        
        }
        
        $resultado = json_decode(file_get_contents($resultado->next));

    }

?>
      
   
  </tbody>
</table>
    
</body>
</html>


