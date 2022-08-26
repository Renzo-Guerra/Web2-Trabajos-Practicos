<?php require './layout/doctype.php'?>
  <form action="./mostrar_tabla.php" method="get">
    <label for="numero">Ingrese el numero maximo de la tabla: </label>
    <input type="number" name="numero_maximo" id="numero" required>

    <input type="submit" value="Enviar">
  </form>
  <?php require './layout/end_doctype.php'?>