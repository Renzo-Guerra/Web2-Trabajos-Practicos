<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 2</title>
</head>
<body>
  <ul>
    <?php
      // Declaramos el array asociativo: key => value
      //? Asociativo porque se asocia una (key/llave) con un (value/value)
      $colores = array("calido" =>"rojo", "frio" =>"azul", "esperanza" =>"amarillo","claro" =>"blanco", "oscuro" => "negro");
      foreach($colores as $key => $color){
        ?><li><?php echo($colores[$key]) ?></li><?php
      }
    ?>
  </ul>
  <ol>
    <?php
      // Declaramos el array iterativo
      //? Iterativo porque empieza desde el 0, e itera de a 1 entre sus por posiciones
      $elementos = array("fuego", "aire", "tierra", "agua");
      foreach($elementos as $elemento){
        ?><li><?php echo($elemento) ?></li><?php
      }
    ?>
  </ol>
</body>
</html>