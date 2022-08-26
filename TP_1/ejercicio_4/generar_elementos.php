<?php
  $cantidad = $_GET['cant'];

  // Se crea un array de elementos con indices desde 1 hasta cant;
  $elementos = array_fill(0, $cantidad, "Elemento ");
  foreach($elementos as $key => $elemento){
    ?><p><?php echo $elementos[$key].=$key+1 ?></p><?php
  }
?>