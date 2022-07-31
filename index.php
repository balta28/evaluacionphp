<?php
$nota1 = 0;
$nota2 = 0;
$nota3 = 0;
$nota4 = 0;
$nombre = "";
$promedio = 0;
$mensaje = "";
//Mesias Baltazar Cornejo Urrutia
if (isset($_POST['enviar'])) {
    $nombre =  ($_POST['nombre']);
    $nota1 = floatval ($_POST['nota1']);
    $nota2 = floatval ($_POST['nota2']);
    $nota3 = floatval ($_POST['nota3']);
    $nota4 = floatval ($_POST['nota4']);
   $promedio = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
    if($promedio >= 7){
        $mensaje = "<div  role='alert'>Aprobado</div>";

    }else{
        $mensaje = "<div  role='alert'>Reprobado</div>";
    }

    
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>selectiva</title>
</head>

<body>
    <div class="alert alert-success" role="alert">
        Practica
    </div>
    <div class="container">
        <form method="POST" action="index.php">
        <div class="form-group">
                <label for="">Ingrese su nombre:</label>
                <input type="text"  class="form-control" placeholder="ingrese su nombre..." name="nombre">
                
            </div>
            <div class="form-group">
                <label for="">Nota 1:</label>
                <input type="number" class="form-control" placeholder="ingrese su nota.." name="nota1">
            </div>
            <div class="form-group">
                <label for="">Nota 2:</label>
                <input type="number" class="form-control" placeholder="ingrese su nota.." name="nota2">
            </div>
            <div class="form-group">
                <label for="">Nota 3:</label>
                <input type="number" class="form-control" placeholder="ingrese su nota.." name="nota3">
            </div>
            <div class="form-group">
                <label for="">Nota 4:</label>
                <input type="number" class="form-control" placeholder="ingrese su nota.." name="nota4">
            </div>

        

            <button type="submit" name="enviar" class="btn btn-outline-success">Seleccionar</button>
        </form>
        <div class="jumbotron">
         <table class="table table-hover table-bordered">
            <tr class = "btn-success">
                <th>Nombre</th>
                <th>Nota 1</th>
                <th>Nota 2</th>
                <th>Nota 3</th>
                <th>Nota 4</th>
                <th>Promedio</th>
                <th>Estado</th>
            </tr>
            <tr>
                <td><?php echo $nombre?></td>
                <td> <?php echo $nota1;?></td>
                <td> <?php echo $nota2;?></td>
                <td> <?php echo $nota3;?></td>
                <td> <?php echo $nota4;?></td>
                <td> <?php echo $promedio;?></td>
                <td> <?php echo $mensaje;?></td>
                
             
            </tr>
         </table>
        </div>
    </div>
</body>

</html>