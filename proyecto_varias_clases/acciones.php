<?php
  include_once 'db.php';

  function showAll(){
    include_once 'templates/header.php';?>
    <div class="container-md py-4">
      <div class="row">
        <!-- Aca deberia hacer otra col con el formulario para añadir una nueva task -->
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
  }


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