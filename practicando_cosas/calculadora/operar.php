<?php
  // Necesita el archivo para utilizar las funciones que hay dentro de el.
  require_once 'operaciones.php';
  
  function operar($operacion, $num1, $num2){
    // Verifican que los valores esten setteados
    if(isset($operacion) && isset($num1) && isset($num2)){
      // Dado el valor de $operacion, llama a la operacion correspondiente
      switch ($operacion) {
        case 'sumar': $respuesta = sumar($num1, $num2); break;
        case 'restar': $respuesta = restar($num1, $num2); break;
        case 'multiplicar': $respuesta = multiplicar($num1, $num2); break;
        case 'dividir': $respuesta = dividir($num1, $num2); break;
        default: $respuesta = "Hubo un error al realizar la operacion"; break;
      }   
      // Devuelve a js el resultado de la operacion
      echo $respuesta;
    }else{
      $respuesta = "Error: Alguno de los parametros no esta seteado.";
      echo $respuesta;
    }
  }
  