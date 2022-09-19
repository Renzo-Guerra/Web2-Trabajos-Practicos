<?php
  require_once 'db.php';

  function mostrarInicio(){
    formularioAgregar();
    buscador();
    tabla();
  }

  function formularioAgregar(){?>
    <form action="agregarMateria">
      <label>Nombre materia: <input type="text" name="materia" placeholder="Materia" required></label>
      <label>Nombre profesor: <input type="text" name="profesor" placeholder="Materia" required></label>      
      
      <button type="submit">Agregar</button>
    </form>
    <?php
  }

  function mostrarSeccionEditar(){
    $parametros = explode('/', $_GET['action']);
    $materia = obtenerMateriaPorID($parametros[1]);

    if(!empty($materia)){
      formularioEditar($materia->id, $materia->nombre, $materia->nombre_profesor);
    }
  }

  function formularioEditar($id, $nombre_materia, $nombre_profesor){?>
    <h3>Seccion editar</h3>
    <form action="validarEdicion">
      <!--Paso el id a traves de un input hidden-->
      <input type="hidden" name="id" value="<?php echo $id ?>">
      <label>Nombre materia: <input type="text" name="materia" placeholder="Materia" value="<?php echo $nombre_materia ?>" required></label>
      <label>Nombre profesor: <input type="text" name="profesor" placeholder="Profesor" value="<?php echo $nombre_profesor ?>" required></label>      
      
      <button type="submit">Modificar</button>
      <a href="inicio"><button>Cancelar</button></a>
    </form>
    <?php
  }

  function validarEdicion(){ 
    echo"Estoy aca";
    if(isset($_GET['id']) && isset($_GET['materia']) && isset($_GET['profesor'])){
      if(!empty($_GET['id']) && !empty($_GET['materia']) && !empty($_GET['profesor'])){
        // Mandamos los datos para que se agreguen a la DB
        editarMateriaBD($_GET['id'], $_GET['materia'], $_GET['profesor']);
        
        // redireccion 302
        header("Location: " . BASE_URL);
      }
    }
    echo"Error al mostrar editar la info";
  }
  function tabla(){?>
    <table>
      <thead>
        <tr>
          <td>Materia</td>
          <td>Profesor</td>
          <td>Accion</td>
        </tr>
      </thead>
      <tbody><?php
      $filas = traerTodo();   // Traemos las materias
      foreach($filas as $fila){?>   <!--Mostramos las materias-->
        <tr>
          <td><?php echo $fila->nombre ?></td>
          <td><?php echo $fila->nombre_profesor ?></td>
          <td><a href="eliminarMateria/<?php echo $fila->id ?>"><button>Eliminar</button></a></td>
          <td><a href="editarMateria/<?php echo $fila->id ?>"><button>Editar</button></a></td>
        </tr><?php
      }?>
      </tbody>
    </table>
    <?php
  }

  // Valida los datos, y en caso de ser validos, llama a la funcion que agrega los datos a la DB
  function agregarMateria(){
    if(isset($_GET['materia']) && isset($_GET['profesor'])){
      if(!empty($_GET['materia']) && !empty($_GET['profesor'])){
        // Mandamos los datos para que se agreguen a la DB
        agregarMateriaBD($_GET['materia'], $_GET['profesor']);
        
        // redireccion 302
        header("Location: " . BASE_URL);
      }
    }
  }