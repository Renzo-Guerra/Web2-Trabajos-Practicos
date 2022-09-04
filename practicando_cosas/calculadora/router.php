<?php
  require_once 'layout.php';
  require_once 'operar.php';
  
  define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

  $ulr_elegida = 'inicio';

  if(!empty($_GET['action'])){
    $ulr_elegida = $_GET['action'];
  }

  $params = explode('/', $ulr_elegida);
  
  switch ($params[0]) {
    // Inicio (default)
    case 'inicio':showInicio(); break;
    // AJAX operaciones que se pueden realizar
    case 'sumar': case 'restar': case 'multiplicar': case 'dividir': operar($params[0], $params[1], $params[2]); break;
    // Seccion PI
    case 'PI': showPI(); break;
    // Seccion desarrolladores
    case 'dev': showDev(); break;
    default: echo "404 not found"; break;
  }