<?php
  require_once 'app/modelos/Modelo.php';
  require_once 'app/vista/Vista.php';

  class Controlador{
    private $modelo;
    private $vista;

    function __construct(){
      $this->modelo = new Modelo();
      $this->vista = new Vista();
    }
    
    function showAll(){
      include_once 'templates/header.php';?>
    
      <div class="container-md py-4">
        <div class="row flex flex-column">
          <!-- Se muestra el formulario -->
          <div class="col mb-5">
            <!-- El action deberia ir al archivo que va a procesar la info del form -->
            <form action="add" class="bg-primary p-3">
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
                  <button type="submit" class="btn btn-success mt-4">Add</button>
                </div>
              </div>
            </form>
          </div>
          <!-- Se muestra la tabla  -->
          <div class="col">
            <table class="table table-bordered">
              <?php $this->obtenerTodo() ?>
            </table>
          </div>       
        </div>
      </div>
      <?php
      include_once 'templates/footer.php';
    }

    private function obtenerTodo(){
      // Verificamos que la conexion haya sido exitosa
      $db = $this->modelo->openDB();
      if($db != false){
        // Obtenemos los datos de la peticion
        $tasks = $this->modelo->getAllFromTable($db);
        // Ejecutamos en base a si la tabla esta vacia o no
        if(empty($tasks)){
          $this->vista->mostrarTablaVacia();
        }else{
          $this->vista->mostrarTablaConElementos($tasks);
        }
      }else{
        $this->vista->errorEnLaConexion();
      }
    }

    function deleteTask($id_to_delete){
      if((!empty($id_to_delete))  &&  ($id_to_delete > 0)){
        $this->modelo->deleteTaskFromDB($id_to_delete);
      }

      // redireccion 302
      header("Location: " . BASE_URL);
    }


    // Crea una row (tr) con sus data's (td)
    function createRow($data){?>
      <tr class="table-<?php echo ($data->completed == 1)? "success": "danger";?>">
        <td><?php echo $data->title ?></td>
        <td><?php echo $data->body ?></td>
        <td class="text-center"><?php echo $data->importance ?></td>
        <td class="text-center"><?php echo ($data->completed == 1)? "Completed" : "Not completed";?></td>
        <td class="text-center"><a href="<?php echo "delete/$data->id" ?>" class="btn btn-danger">Delete</a></td>
      </tr><?php
    }
  
    /**
     * Para que una tarea se agregue, los 3 campos del formulario no deben estar vacios/nulos, y el campo
     * importanse debe ser un numero de entre el 1 y el 5 (ambos incluidos) 
     */
    function addTask(){
      define("MIN_IMPORTANCE", 1);
      define("MAX_IMPORTANCE", 5);

      if(isset($_GET['title']) && isset($_GET['body']) && isset($_GET['importance'])){
        if(!empty($_GET['title']) && !empty($_GET['body']) && !empty($_GET['importance'])){
          $title = $_GET['title'];
          $body = $_GET['body'];
          $importance = $_GET['importance'];
          // Se valida que importance este dentro del rango establedido
          if(($importance >= MIN_IMPORTANCE) && ($importance <= MAX_IMPORTANCE)){
            // Se agrega la task a la DB
            $this->modelo->addTaskToDB($title, $body, $importance);
          }
        }
      }
      // redireccion 302
      header("Location: " . BASE_URL);
    }
  }