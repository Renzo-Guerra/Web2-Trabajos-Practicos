<?php
  // Validacion de campos
  if((empty($_GET['altura'])) || (empty($_GET['altura']))){
    echo "Error: Debe setear todos los valores del formulario";
    return;
  }

  $altura = $_GET['altura'];
  
  $peso = $_GET['peso'];
  // Indice Masa Corporal
  $imc = $peso/(pow($altura, 2));
  
  define("MINIMO_PESO_NORMAL", 18.5);
  define("MINIMO_PESO_SOBREPESO", 25.0);
  define("MINIMO_PESO_OBESIDAD", 30.0);

  if($imc < MINIMO_PESO_NORMAL){
    $estado = "bajo peso";
  }elseif($imc < MINIMO_PESO_SOBREPESO){
    $estado = "normal";
  }elseif($imc < MINIMO_PESO_OBESIDAD){
    $estado = "sobrepeso";
  }else{
    $estado = "obesidad";
  }

  ?><p>Estado de la persona: <?php echo $estado ?>. Su IMC es de: <?php echo $imc ?></p>