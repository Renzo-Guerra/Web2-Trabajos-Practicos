<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Ejercicio 4</title>
</head>
<body>
  <div class="contenedor">
    <ul>
      <?php require_once 'db_opciones.php';
      foreach ($opciones as $opcion) {
        ?><li><a href="./generar_elementos.php?cant=<?php echo $opcion->cantidad?>"><?php echo $opcion->texto?></a></li>  
      <?php
      }
      ?>
    </ul>
  </div>
</body>
</html>