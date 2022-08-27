<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles.css">
  <title>Ejercicio 9</title>
</head>
<body>
  <!--
  * - Formulario que envia los datos a "showData.php" atraves del metodo POST.
  * - con 'autocomplete="off"', cada campo del formulario no nos da una lista de sujerencias
  * en base a valores que hayamos puesto previamente.
  -->
  <form action="./showData.php" method="GET" autocomplete="off">
    <div class="form__options">
      <div class="form__option">
        <label>Nombre: <input type="text" name="nombre" required></label>
      </div>
      <div class="form__option">
        <label>Apellido: <input type="text" name="apellido" id="apellido" required></label>
      </div>
      <div class="form__option">
        <label>Edad: <input type="number" name="edad" id="edad" required></label>
      </div>
      <div class="form__option column">
        <label><input type="radio" name="genero" value="m"> M</label>
        <label><input type="radio" name="genero" value="f"> F</label>
        <label><input type="radio" name="genero" value="x"> X</label>
      </div>
      <div class="form__option">
        <label for="nacionalidad">Pais de origen: </label>
        <select name="nacionalidad" id="nacionalidad">
          <option value="Argentina">Argentina</option>
          <option value="Brasil">Brasil</option>
          <option value="Chile">Chile</option>
          <option value="Peru">Peru</option>
          <option value="Inglaterra">Inglaterra</option>
          <option value="Portugal">Portugal</option>
        </select>
      </div>
      <div class="form__option column">
        <label>Futbol <input type="checkbox" name="intereses[]" value="futbol" id="futbol"></label>
        <label>Golf <input type="checkbox" name="intereses[]" value="golf" id="golf"></label>
        <label>Basket <input type="checkbox" name="intereses[]" value="basket" id="basket"></label>
        <label>Musica <input type="checkbox" name="intereses[]" value="musica" id="musica"></label>
      </div>
    </div>
    <button type="submit">Enviar</button>
  </form>  
</body>
</html>