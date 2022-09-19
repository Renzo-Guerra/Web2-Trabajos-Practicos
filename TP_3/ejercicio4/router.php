<?php 
  require_once 'actions.php';
  require_once 'db.php';

  define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

  $ulr_elegida = 'home';

  if(!empty($_GET['action'])){
    $ulr_elegida = $_GET['action'];
  }

  $params = explode('/', $ulr_elegida);

  switch ($params[0]) {
    // Inicio (default)
    case 'home': home(); break;
    default: echo "404 not found"; break;
  }