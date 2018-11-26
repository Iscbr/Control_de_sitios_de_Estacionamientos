<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="utf-8">
    <title>F-Parking</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- GOOGLE FONTS (ROBOTO) -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- PARKING SCRIPT -->
    <script type="text/javascript" src="scripts/parking.js"></script>
    <!-- GMAPS PARKING LOCATION SCRIPT -->
    <script type="text/javascript" src="scripts/gMapsParking.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </head>

  <!-- BODY  -->
  <body>

    <!-- NAVIGATION -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top color-nav">
      <div class="container">

        <a class="navbar-brand" href="./index.php">
          <img src="img/logo.png" width="35" height="35" class="d-inline-block align-top" alt="Inicio">
            F-Parking
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarNav">
          <!-- ml-auto -> MarginLeft-auto -->
          <ul class="navbar-nav navbar-right">

            <form class="form-inline">
              <input class="form-control mr-sm-2" type="search" placeholder="Ingrese su búsqueda" aria-label="Search">
              <button class="btn btn-success" type="submit">Buscar</button>
            </form>

            <li class="nav-item active">
              <a class="nav-link" action href="index.php">
                <button type="button" class="btn btn-outline-light">
                  <span class="glyphicon glyphicon-home"></span> Inicio
                </button>
              </a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" action href="php/en_desarrolloUser.php">
                <button type="button" class="btn btn-outline-light">
                  <span class="glyphicon glyphicon-info-sign"></span> Ayuda
                </button>
              </a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" action href="php/en_desarrolloUser.php">
                <button type="button" class="btn btn-outline-light">
                  <span class="glyphicon glyphicon-question-sign"></span> About
                </button>
              </a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" action href="php/registrate.php">
                <button type="button" class="btn btn-outline-light">
                  <span class="glyphicon glyphicon-list"></span> Registrarse
                </button>
              </a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" action href="php/login.php">
                <button type="button" class="btn btn-outline-light">
                  <span class="glyphicon glyphicon-log-in"></span> Entrar
                </button>
              </a>
            </li>
          </ul>
        </div>

      </div>
    </nav>
