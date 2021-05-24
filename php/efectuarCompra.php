<?php

session_start();


	if(!$_SESSION['verificar']){
		header("Location: Login.php");//cambiar al login que esta haciendo Sergio
	}
	$now = time();

	if($now > $_SESSION['expire']) {
	session_destroy();
	header("Refresh:0; url=index.php");//cambiar direccion o hacer otra pag para que muestre esta info
	exit;
	}
	$idpersona=  $_SESSION['Identi'];

	require_once "connect.php";

	$idruta=$_POST['id'];
	$campos=$_POST['campos'];
	$disponible=$_POST['dispo'];
	$precior=$_POST['precio'];

	$query="UPDATE rutas SET Cant_boletos = Cant_boletos - '$campos' WHERE id_ruta = '$idruta'";
	$query2="UPDATE usuarios SET CantidadBoletos= CantidadBoletos + '$campos' WHERE Cedula = '$idpersona'"; 
	if($disponible=0 || $disponible < $campos) {
		echo '<script>
				alert("No hay suficientes espacios disponibles en este momento.");
				windows.history.go(-1);
			</script>';
			header("Refresh:0; url=comprar.php");
		exit;
	}
	$verificarD = $mysqli->query("SELECT * FROM usuarios WHERE Cedula = '$idpersona'");
	$fila=$verificarD->fetch_array(MYSQLI_ASSOC);
	if($fila['CantidadBoletos']==5 || $campos>5 || $fila['CantidadBoletos']+$campos>5){
		echo '<script>
		alert("Excediste la cantidad de boletos máximos permitidos por persona");
		windows.history.go(-1);
		</script>';
		header("Refresh:0; url=comprar.php");
		exit;
	}
	$impuesto=($precior*0.13)+$precior;
	$total=$impuesto*$campos;
	$query3="INSERT INTO factura VALUES ('$fila[Cedula]','$fila[Tarjeta]','$idruta','$precior','$impuesto','$total',' ','30024563255','San Pedro, San Jose, Costa Rica.','$fila[Correo]','$campos','')";
	if($mysqli->query($query) && $mysqli->query($query2) && $mysqli->query($query3)){
	/*	echo '<script>
		  alert("La compra ha sido existosa.");
		  windows.history.go(-1);
		  </script>';*/
		 //header("Location: pdf.php");
		 header("Refresh:0; url=../pdf/pdf.php?idr=$idruta ");
		 
		 
	}else{
		echo '<script>
		  alert("Error no se pudo comprar los boletos");
		  windows.history.go(-1);
		  </script>';
		  header("Refresh:0; url=comprar.php");
		  exit;
	}
	mysqli_close($mysqli);
?>