<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Ejercicio 5</title>
</head>
<body>
  <form action="./obtener_data.php" method="GET">
    <div class="opcion">
      <label for="peso">Ingrese su peso: </label>
      <input type="number" name="peso" id="peso" require>
    </div>
    <div class="opcion">
      <label for="altura">Ingrese su altura(en mts): </label>
      <input type="text" name="altura" id="altura" require>
    </div>
    <button type="submit">Enviar</button>
  </form>
</body>
</html>