<?php
  // Muestra el inicio de la pagina
  function showInicio(){
    // Inlcuimos el header
    include 'templates/header.php';?>

    <div class="container-fluid">
      <div class="row p-5">
        <form autocomplete="off" id="form" method="GET" class="col-8">
          <div class="row row-cols-4 align-items-center">
            <div class="col">
              <input class="form-control" type="number" name="num1" id="num1" required placeholder="Primer numero">
            </div>
            <div class="col col-auto">
              <select name="operacion" id="operacion">
                <option value="sumar">+</option>
                <option value="restar">-</option>
                <option value="multiplicar">*</option>
                <option value="dividir">/</option>
              </select>  
            </div>
            <div class="col">
              <input class="form-control" type="number" name="num2" id="num2" required placeholder="Segundo numero"> 
            </div>
            <div class="col">
              <button type="submit" class="btn btn-primary">Calcular</button>
            </div>
          </div>
        </form>
        <div class="container-fluid col-4" id="mensaje">
          <!-- Aqui dentro irá la respuesta -->
        </div>
      </div>
    </div>

    <?php
    // Inlcuimos el footer
    include 'templates/footer.php';
  }

  // Muestra la seccion PI
  function showPI(){
    include 'templates/header.php';?>
    <div class="container-fluid">
      <h2>El numero PI</h2>
      <p>PI (π) es la relación entre la longitud de una circunferencia y su diámetro en geometría euclidiana. Es un número irracional y una de las constantes matemáticas más importantes. Se emplea frecuentemente en matemáticas, física e ingeniería. Extracto sacado de <a href="http://https://es.wikipedia.org/wiki/N%C3%BAmero_%CF%80#:~:text=%CF%80%20%3D%203.14159..." target="_blank">Wikipedia</a>.</p>
    </div>
    <?php
  }

  // Muestra la seccion desarrollador
  function showDev(){
    include 'templates/header.php';
    ?>
    <div class="container-md">
      <!-- Lista sacada de bootstrap -->
      <ul class="list-group">
        <li class="list-group-item active">Creador: Renzo Guerra</li>
        <li class="list-group-item"><a href="https://github.com/Renzo-Guerra" target="_blank" alt="Perfil en github">Perfil en Github</a></li>
      </ul>
    </div>
    <?php
  }
?>