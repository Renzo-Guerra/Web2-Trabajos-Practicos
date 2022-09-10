<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Establecemos la etiqueta base -->
    <base href="<?php echo BASE_URL ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Importacion de css de bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <title>Proyecto hasta fin de año</title>
  </head>
<body>
  <header>
    <!-- Navbar de bootstrap (contiene algunas modificaciones)-->
    <nav class="navbar navbar-expand bg-light border-bottom">
      <div class="container-fluid">
        <a class="navbar-brand" href="list">Inicio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- En caso de querer agregar mas items a la navbar -->
        <!-- <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">No hace nada</a>
            </li>
          </ul>
        </div> -->
      </div>
    </nav>
  </header>