<?php 
  require_once 'acciones.php';

  define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

  $ulr_elegida = 'list';

  if(!empty($_GET['action'])){
    $ulr_elegida = $_GET['action'];
  }

  $params = explode('/', $ulr_elegida);
  /*
    mostrar -> showAll()
    agregar -> add()
    eliminar -> delete()
    completar -> complete()
  */

  switch ($params[0]) {
    // Inicio (default)
    case 'list': showAll(); break;
    default: echo "404 not found"; break;
  }