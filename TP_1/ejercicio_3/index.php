<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles.css">
  <title>Ejercicio 3</title>
</head>
<body>
  <!--
  * - Formulario que envia los datos a "showData.php" atraves del metodo POST.
  * - con 'autocomplete="off"', cada campo del formulario no nos da una lista de sujerencias
  * en base a valores que hayamos puesto previamente.
  -->
  <form action="./showData.php" method="POST" autocomplete="off">
    <div class="form__options">
      <div class="form__option">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre" required>
      </div>
      <div class="form__option">
        <label for="apellido">Apellido: </label>
        <input type="text" name="apellido" id="apellido" required>
      </div>
      <div class="form__option">
        <label for="edad">Edad: </label>
        <input type="number" name="edad" id="edad" required>
      </div>
    </div>
    <button type="submit">Enviar</button>
  </form>  
</body>
</html>