<?php
  function abrirBD(){
    try{
      $db = new PDO('mysql:host=localhost;'.'dbname=tp3_e5;charset=utf8', 'root', '');
    }catch(PDOException $Exception){
      $db = false;
    }
    
    return $db;
  }

  function traerTodo(){
    $db = abrirBD();
    if(!$db) return false;

    $query = $db->prepare("SELECT * FROM materia");
    $query->execute();
    $materias = $query->fetchAll(PDO::FETCH_OBJ);

    return $materias;
  }
  
  function existeEnLaDB($db, $nombre_materia, $nombre_profesor){
    $query = $db->prepare("SELECT * FROM materia WHERE nombre = ? AND nombre_profesor = ?");
    $query->execute([$nombre_materia, $nombre_profesor]);
    $materia = $query->fetch(PDO::FETCH_OBJ);

    return $materia;
  }

  function agregarMateriaBD($nombre_materia, $nombre_profesor){
    // Abrimos la conexion
    $db = abrirBD();
    if(!$db) return false;

    // Se pasa todo a minusculas a minusculas
    $nombre_materia = strtolower($nombre_materia);
    $nombre_profesor = strtolower($nombre_profesor);
    // No se puede agregar una materia con los mismos atributos de una materia ya cargada en la BD
    $existe = existeEnLaDB($db, $nombre_materia, $nombre_profesor);
    if(!$existe){  // En caso de que no exista ninguna coincidencia en la BD, la agrega
      $query = $db->prepare("INSERT INTO materia (nombre, nombre_profesor) VALUES (?, ?)");
      $query->execute([$nombre_materia, $nombre_profesor]);
    }
  }

  function eliminarMateriaBD($id_materia){
    $db = abrirBD();
    if(!$db) return false;

    $query = $db->prepare ("DELETE FROM materia WHERE id = ?");
    $query->execute([$id_materia]);

    // redireccion 302
    header("Location: " . BASE_URL);
  }

  function obtenerMateriaPorID($id_buscar){
    // Abrimos la conexion
    $db = abrirBD();
    if(!$db) return false;

    $query = $db->prepare("SELECT * FROM materia WHERE id = ?");
    $query->execute([$id_buscar]);
    $materia = $query->fetch(PDO::FETCH_OBJ);

    return $materia;
  }

  function editarMateriaBD($id_materia, $nombre_materia, $nombre_profesor){
    $db = abrirBD();
    $query = $db->prepare("UPDATE materia SET nombre = ?, nombre_profesor = ? WHERE id = ?");
    $query->prepare([$nombre_materia, $nombre_profesor]);

    // redireccion 302
    header("Location: " . BASE_URL);
  }