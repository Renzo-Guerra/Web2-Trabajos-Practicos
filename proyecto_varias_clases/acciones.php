<?php
  include_once 'db.php';

  /*------------------ Funciones llamadas por el router ------------------*/
  function showAll(){
    include_once 'templates/header.php';?>
    <div class="container-md py-4">
      <div class="row flex flex-column">
        <!-- Se muestra el formulario -->
        <div class="col mb-5">
          <!-- El action deberia ir al archivo que va a procesar la info del form -->
          <form action="" class="bg-primary p-3">
            <div class="row d-flex align-items-center">
              <div class="col-3 d-flex flex-column">
                <label for="title">Titulo:</label>
                <input type="text" name="title" id="title" placeholder="Task title" required>
              </div>
              <div class="col-5 d-flex flex-column">
                <label for="body">Description:</label>
                <textarea name="body" id="body" cols="30" rows="1" placeholder="Description" required></textarea>
              </div>
              <div class="col-3 d-flex flex-column">
                <label for="importance">Importance:</label>
                <input type="number" name="importance" id="importance" placeholder="Task importance" required>
              </div>
              <div class="col-1">
                <button type="submit" class="btn btn-secondary">Add</button>
              </div>
            </div>
          </form>
        </div>
        <!-- Se muestra la tabla  -->
        <div class="col">
          <table class="table table-bordered"><?php
          // realizamos la conexion
          $db = openDB();
          // Verificamos que la conexion haya sido exitosa
          if($db != false){
            // Obtenemos los datos de la peticion
            $tasks = getAllFromTable($db);
            // Ejecutamos en base a si la tabla esta vacia o no
            if(empty($tasks)){?> 
              <tr class="bg-primary">
                <td class="text-center text-light"><?php echo"La tabla esta vacia";?></td>
              </tr><?php
            }else{
              // Se crean los encabezados
              createHeadings();?>
              <tbody><?php
                // Se agrega cada tarea a la tabla
                foreach($tasks as $task){
                  createRow($task);
                }?>
              </tbody><?php
            }
          }else{?>
            <tr class="bg-danger">
              <td class="text-center text-light"><?php echo"Error al conectarse a la base de datos";?></td>
            </tr><?php
          }?>
          </table>
        </div>       
      </div>
    </div>
    <?php
    include_once 'templates/footer.php';
  }
/*------------------ Funciones llamadas por el router ------------------*/


  /*------------------ Funciones auxiliares ------------------*/
  // Crea el heading de la tabla
  function createHeadings(){?>
    <thead>
      <tr class="table-primary">
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Importance</th>
        <th scope="col">Status</th>
      </tr>
    </thead><?php
  }

  // Crea una row (tr) con sus data's (td)
  function createRow($data){?>
    <tr class="table-<?php echo ($data->completed == 1)? "success": "danger";?>">
      <td><?php echo $data->title ?></td>
      <td><?php echo $data->body ?></td>
      <td class="text-center"><?php echo $data->importance ?></td>
      <td class="text-center"><?php echo ($data->completed == 1)? "Completed" : "Not completed";?></td>
    </tr><?php
  }
  /*------------------ Funciones auxiliares ------------------*/