<?php 
  require_once 'acciones.php';
  require_once 'db.php';

  define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

  $ulr_elegida = 'inicio';

  if(!empty($_GET['action'])){
    $ulr_elegida = $_GET['action'];
  }

  $params = explode('/', $ulr_elegida);

  switch ($params[0]) {
    // Inicio (default)
    case 'inicio': mostrarInicio(); break;
    case 'agregarMateria': agregarMateria(); break;
    case 'eliminarMateria': eliminarMateriaBD($params[1]); break;
    case 'editarMateria': {
      // En caso de que el segundo parametro contenga "validarEdicion"...
      if(str_contains("validarEdicion", $params[1])){
        validarEdicion($params[1]);
      }else{
        mostrarSeccionEditar($params[1]);
      }
      break;
    }
    case 'mostrarResultadosParecidos': mostrarResultadosParecidos(); break;
    default: echo "404 not found"; break;
  }