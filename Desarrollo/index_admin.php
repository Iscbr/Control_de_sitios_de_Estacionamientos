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
    <link rel="stylesheet" href="css/style.css">
      <!-- UPDATE CAJONES SCRIPT -->
    <script type="text/javascript" src="scripts/update.js"></script>
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
          <img src="img/logo.png" width="35" height="35" class="d-inline-block align-top" alt="Inicio">
            F-Parking
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <!-- ml-auto -> MarginLeft-auto -->
          <ul class="navbar-nav navbar-right">

            <li class="nav-item active">
              <a class="nav-link" action href="index_admin.php?idEst=<?php echo "$id_Recv"; ?>">
                <button type="button" class="btn btn-outline-light">
                  <span class="glyphicon glyphicon-home"></span> Inicio
                </button>
              </a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" action href="php/en_desarrolloAdmin.php?idEst=<?php echo "$id_Recv"; ?>">
                <button type="button" class="btn btn-outline-light">
                  <span class="glyphicon glyphicon-info-sign"></span> Ranking
                </button>
              </a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" action href="php/en_desarrolloAdmin.php?idEst=<?php echo "$id_Recv"; ?>l">
                <button type="button" class="btn btn-outline-light">
                  <span class="glyphicon glyphicon-user"></span> Perfil
                </button>
              </a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" action href="php/en_desarrolloAdmin.php?idEst=<?php echo "$id_Recv"; ?>">
                <button type="button" class="btn btn-outline-light">
                  <span class="glyphicon glyphicon-info-sign"></span> Ayuda
                </button>
              </a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" action href="php/en_desarrolloAdmin.php?idEst=<?php echo "$id_Recv"; ?>">
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


    <div class="container mt-5"></div>
    <div class="container">


      <div class="row">
        <div class="col-md-12 centrar">
          <h1 class="mt-5 display-5">Bienvenido, <h1 id="nombre" class="display-1"></h1></h1>
        </div>
      </div>

      <div class="row">

        <div class="col-md-6">
          <h1 class="display-5">Tu estacionamiento:</h1>
          <h1 id="name_parking" class="display-3" style="text-align: center;"></h1>
        </div>

        <div class="col-md-6">
          <h1 class="display-5">Sistema de estacionamiento:</h1>

          <div class="container mt-5">
            <button id="Entrar"class="btn btn-success" type="button">Ingresar</button>
            <button id="Salir" class="btn btn-success" type="button">Salir</button>
          </div>

          <h1>Estado actual</h1>
          <h3 id="vacios">Lugares disponibles: </h3>
          <h3 id="ocupados">Lugares ocupados: </h3>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-md-12 centrar">
          <h1>Total de entradas en el día: 37</h1>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-md-12 centrar">
          <h1>Personas que han visitado tu estacionamiento hoy: 95</h1>
        </div>
      </div>

    </div>

    <script>
      /*Variables globales
        id_parking = ID de estacionamiento
        dat = obtiene los datos del JSON
      */
      var id_parking= "<?= $id_Recv ?>";
      console.log(id_parking);
      var dat;
      /* Función que obtiene los datos del json.
         Esta función es llamada desde el archivo de update.js
         Requiere:
            id_parking = ID de estacionamiento
            function() = es la función a la que llamara para actualizar los datos de la pagina
      */
      datos(id_parking,function(){
         dat = JSON.parse(this.responseText);
         //Obtiene el nombre del estacionamiento
         var nombre= dat[1];
         $('#name_parking').html(nombre);
         $('#nombre').html(dat[2]);
         //Incrementa el valor de ocupados en la BD hacer click
         $('#Entrar').click(function(){
            update(id_parking,dat[0]=parseInt(dat[0])+1);
            setCajones();
        });
         //Decrementa el valor de ocupados en la BD hacer click
         $('#Salir').click(function(){
            update(id_parking,dat[0]=parseInt(dat[0])-1);
            setCajones();
        });
      });
      /*Función que actualiza las estiquetas en donde se muestra los lugares vacios y los lugares ocupados*/
      function setCajones(){
        $('#ocupados').html('Lugares ocupados:    '+dat[0]);
        $('#vacios').html('Lugares disponibles:   '+(dat[3]-dat[0]));
      }
    </script>

</body>
</html>
