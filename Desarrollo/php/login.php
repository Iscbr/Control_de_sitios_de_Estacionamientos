<?php session_start();

if (isset($_SESSION['usuario'])) {
	header('Location: ../index_user.html');
}if(isset($_SESSION['admin'])){
	header('Location: ../index_admin.html');
}
$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $correo = filter_var(strtolower($_POST['correo']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	$password = hash('sha512', $password);
  try {

    	  $conexion = new PDO('mysql:host=sql173.main-hosting.eu;dbname=u450515599_pking', 'u450515599_pking', 'Equipo1-fparking');

  } catch (PDOException $e) {
      echo "Error:" . $e->getMessage();;
  }
  $statement = $conexion->prepare('
		SELECT usuario_tipo,id_usuarios FROM usuarios WHERE correo = :correo AND contrasena = :password'
	);
	$statement->execute(array(
		':correo' => $correo,
		':password' => $password
	));
	$resultado = $statement->fetch();
	if ($resultado !== false) {
		if($resultado['usuario_tipo']==1){
					$_SESSION['usuario']=$correo;
			header('Location: ../index_user.html');
		}else{
			$_SESSION['admin']=$correo;
			$id=$resultado['id_usuarios'];
			$statement = $conexion->prepare('
				SELECT id_estacionamiento FROM estacionamientos WHERE usuario_id = :id'
			);
			$statement->execute(array(
				':id' => $id
			));
			$resultado = $statement->fetch();
			$id_estacionamiento=$resultado['id_estacionamiento'];
			header("Location: ../index_admin.php?idEst=$id_estacionamiento");
		}
	} else {
		$errores .= '<li>Datos Incorrectos</li>';
	}

 }
require 'views/login.view.php';
?>
