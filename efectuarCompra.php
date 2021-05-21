<?php

session_start();

	if(!$_SESSION['verificar']){
		header("Location: LoginUsua.php");//cambiar al login que esta haciendo Sergio
	}
	$now = time();

	if($now > $_SESSION['expire']) {
	session_destroy();
	header("Location: cierre.html");//cambiar direccion o hacer otra pag para que muestre esta info
	exit;
	}

	require_once "php/connect.php";

	$idruta=$_POST['id'];
	$campos=$_POST['campos'];
	$disponible=$_POST['dispo'];

	$query="UPDATE rutas SET Cant_boletos = Cant_boletos - '$campos' WHERE id_ruta = '$idruta'";

	if($disponible=0 || $disponible < $campos) {
		echo '<script>
				alert("No hay suficientes espacios disponibles en este momento.");
				windows.history.go(-1);
			</script>';
		exit;
	}

	if($mysqli->query($query)){
		echo '<script>
		  alert("La compra ha sido existosa. Felicidades!");
		  windows.history.go(-1);
		  </script>';
	}else{
		echo '<script>
		  alert("Error no se pudo comprar los boletos");
		  windows.history.go(-1);
		  </script>';
	}
	mysqli_close($mysqli);
?>