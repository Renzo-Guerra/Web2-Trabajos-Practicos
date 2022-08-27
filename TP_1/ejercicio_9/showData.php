<?php
  /* 
    No se validan ni el nombre, ni el apellido, ni la edad, ni el genero.
    Se supone que mas adelante validaremos del lado de js que es mas comodo.
  */

  $nombre = $_GET['nombre'];
  $apellido = $_GET['apellido'];
  $edad = $_GET['edad'];
  $sexo = $_GET['genero'];
  $nacionalidad = $_GET['nacionalidad'];
  if(isset($_GET['intereses']) && !is_null($_GET['intereses'])){
    $intereses = $_GET['intereses'];
    // impolode() es el equivalente en js a Array.join();
    $checkboxes = implode(' ', $intereses);
  }

  echo (isset($intereses))? "<p>Sus intereses son: $checkboxes</p>" : "<p>No tiene intereses</p>";
?>
<h1><?php echo $nombre?> <?echo $apellido?> tiene <?php echo $edad?> años</h1>
<!-- NO se cierran llaves php -->