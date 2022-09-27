<?php  
  class Vista{
    public function createRows($tasks){
      ?><tbody><?php
      foreach($tasks as $task){
        $this->createRow($task);
      }
      ?></tbody><?php
    }

    private function createRow($task){?>
      <!-- Crea una row (tr) por cada data's (td) -->
      <tr class="table-<?php echo ($task->completed == 1)? "success": "danger";?>">
        <td><?php echo $task->title ?></td>
        <td><?php echo $task->body ?></td>
        <td class="text-center"><?php echo $task->importance ?></td>
        <td class="text-center"><?php echo ($task->completed == 1)? "Completed" : "Not completed";?></td>
        <td class="text-center"><a href="<?php echo "delete/$task->id" ?>" class="btn btn-danger">Delete</a></td>
      </tr><?php
    }
    
    // Crea el heading de la tabla
    private function createHeadings(){?>
      <thead>
        <tr class="table-primary">
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Importance</th>
          <th scope="col">Status</th>
          <th scope="col">Delete button</th>
        </tr>
      </thead><?php
    }

    function errorEnLaConexion(){?>
      <tr class="bg-danger">
        <td class="text-center text-light"><?php echo"Error al conectarse a la base de datos";?></td>
      </tr><?php
    }
    function mostrarTablaVacia(){?>
      <tr class="bg-primary">
        <td class="text-center text-light"><?php echo"La tabla esta vacia";?></td>
      </tr><?php
    }

    function mostrarTablaConElementos($tasks){
      // Se crean los encabezados
      $this->createHeadings();
      // Se agrega cada tarea a la tabla
      $this->createRows($tasks);
    }
  }