<?php
  function openDB(){
    try {
      $db = new PDO('mysql:host=localhost;'.'dbname=db_tasks;charset=utf8', 'root', '');
    } catch (Exception $error) {
      $db = false;
    }
    
    return $db;
  }
  
  function getAllFromTable($db){
    // Preparamos la peticion
    // $query = $db->prepare("SELECT * FROM task WHERE title = 'asda'"); // Ejemplo de tabla "vacia"
    $query = $db->prepare("SELECT * FROM task");
    // Ejecutamos la peticion
    $query->execute();
    // Obtenemos la respuesta en formato arreglo de objeto (Esto porq usamos fetchAll, de usar fetch devuelve 1 objeto nomas).
    $tasks = $query->fetchAll(PDO::FETCH_OBJ);

    return $tasks;
  }

  function addTaskToDB($title, $body, $importance){
    $db = openDB();
    // En caso de que la conexion sea exitosa
    if($db != false){
      // Se prepara la peticion
      $query = $db->prepare("INSERT INTO task (title, body, importance, completed) VALUES (?, ?, ?, ?)");
      // Se ejecuta la peticion
      $query->execute([$title, $body, $importance, false]);
    }
  }