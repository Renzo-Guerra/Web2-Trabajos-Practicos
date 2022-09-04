<?php
  require_once 'noticias.php';
  require_once 'about.php';
  
  define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

  $action = "home"; // Por defecto el action es "home"
  if(!empty($_GET['action'])){
    $action = $_GET['action']; // En caso de que el action sea diferente de null, se asigna ese "action"
  
  }
  // parsea la accion Ej: about/juan --> ['about', 'juan']
  $params = explode('/', $action); // Genera un arreglo

  switch($params[0]){
    case 'home': showHome(); break;
    case 'noticia': showNoticia($params[1]); break;
    case 'about': (empty($params[1])? showAbout() : showAbout($params[1])); break;
    default: echo "404 not found"; break;
  }