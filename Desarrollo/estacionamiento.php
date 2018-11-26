<?php
  /*
    El contenido de NOMBRE se recive desde main.js, al momento de crear el
    array con la información de las tarjetas de Google Maps.
  */
  $nombre = $_GET["nombre"];
  $latEst = $_GET["lat"];
  $lngEst = $_GET["lng"];
  $color = $_GET["color"];
?>

<script type="text/javascript">
  // Se obtiene la variable recibida en el php de arriba.
  var nombre = "<?= $nombre ?>";
  var latEst = "<?= $latEst ?>";
  var lngEst = "<?= $lngEst ?>";
  var color = "<?= $color ?>";
</script>

<?php
  /*
  Se llama el header en donde están todas las referencias a los archivos
  que se necesitan y ahí está la llamada al achivo 'parking.js' que recibe
  la variable 'nombre' del javascript de arriva.
   */
  include('php/header.php');
?>


</div>
	<div class="container mt-5">
		<div class="row">


      <div id="info" class="col-md-6">
        <!--div class="wrap">
					<div class="tarjeta-wrap">
						<div class="tarjeta">
							<div class="adelante">
                <h1 class="display-4 centrado">Aquí va el nombre del estacionamiento</h1>
                <hr>
                <h1 class="display-5">Lugares disponibles: <p style="color: yellow;">23</p></h1>
              </div>
							<div class="atras">
                <h1 class="display-4 centrado">Más información</h1>
                <p class="display-5 centrado"><img src="img/ubicacion.png" width="40" height="40"> Dirección: Aquí va la dirección.</p>
                <p class="display-5 centrado"><img src="img/horario.png" width="40" height="40"> Horario: Aquí va el horario</p>
                <p class="display-5 centrado"><img src="img/hora.png" width="40" height="40"> Precio: Aquí va el precio</p>
                <p class="display-5 centrado"><img src="img/telefono.png" width="40" height="40"> Teléfono: aquí va el teléfono</p>
                <p class="display-5 centrado">Notas: Aquí van las notas.</p>
							</div>
						</div>
					</div>
				</div-->
      </div>

      <div class="col-md-6 centrar">
        <!-- GOOGLE MAPS -->
        <div class="row">
          <div id="mapParking" class="col-md-12 my-5 " style="width: 100%;height: 500px;"></div>
          <script async defer
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDy1Lgx05CgWi-PxUgU2iw4P1pvaIWqL1Y&callback=initMap">
          </script>
        </div>
        <!-- -->
      </div>

		</div>
	</div>


</body>
</html>
