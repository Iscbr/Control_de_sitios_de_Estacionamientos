<?php
  $id_Recv=$_GET["idEst"];
?>

<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="utf-8">
    <title>F-parking</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- GOOGLE FONTS (ROBOTO) -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- actualiza en tiempo -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script-->
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </head>




  <!-- BODY  -->
  <body>

    <!-- NAVIGATION -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top color-nav">

      <div class="container">

        <a class="navbar-brand" href="index_admin.php?idEst=<?php echo "$id_Recv"; ?>">
          <img src="../img/logo.png" width="35" height="35" class="d-inline-block align-top" alt="Inicio">
            F-Parking
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <!-- ml-auto -> MarginLeft-auto -->
          <ul class="navbar-nav navbar-right">

            <li class="nav-item active">
              <a class="nav-link" action href="../index_admin.php?idEst=<?php echo "$id_Recv"; ?>">
                <button type="button" class="btn btn-outline-light">
                  <span class="glyphicon glyphicon-home"></span> Inicio
                </button>
              </a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" action href="en_desarrolloAdmin.php?idEst=<?php echo "$id_Recv"; ?>">
                <button type="button" class="btn btn-outline-light">
                  <span class="glyphicon glyphicon-info-sign"></span> Ranking
                </button>
              </a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" action href="en_desarrolloAdmin.php?idEst=<?php echo "$id_Recv"; ?>">
                <button type="button" class="btn btn-outline-light">
                  <span class="glyphicon glyphicon-user"></span> Perfil
                </button>
              </a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" action href="en_desarrolloAdmin.php?idEst=<?php echo "$id_Recv"; ?>">
                <button type="button" class="btn btn-outline-light">
                  <span class="glyphicon glyphicon-info-sign"></span> Ayuda
                </button>
              </a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" action href="en_desarrolloAdmin.php?idEst=<?php echo "$id_Recv"; ?>">
                <button type="button" class="btn btn-outline-light">
                  <span class="glyphicon glyphicon-question-sign"></span> About
                </button>
              </a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" action href="php/cerrar.php">
                <button type="button" class="btn btn-outline-light">
                  <span class="glyphicon glyphicon-log-out"></span> Salir
                </button>
              </a>
            </li>

          </ul>
        </div>

      </div>
    </nav>


    <div class="container">
      <div class="row">

        <div class="col-md-12">
          <h1 class="display-1" style="text-align: center;">¡En desarrollo!</h1>
        </div>

      </div>
    </div>





  </body>
</html>
