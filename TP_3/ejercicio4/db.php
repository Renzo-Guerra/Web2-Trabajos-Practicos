<?php
  function openDB(){
    try {
      $db = new PDO('mysql:host=localhost;'.'dbname=tp3_e3;charset=utf8', 'root', '');
    } catch (PDOException $Exception) {
      $db = false;
    }

    return $db;
  }

  function traerTodo(){
    $db = openDB();
    if($db){
      $query = $db->prepare("SELECT * FROM pagos");
      $query -> execute();
      $pagos = $query->fetchAll(PDO::FETCH_OBJ);

      return $pagos;
    }
  }