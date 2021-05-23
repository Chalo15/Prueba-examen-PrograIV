<?php
	require_once "connect.php";

    $nombre = $_POST['Nombre'];//
    $apellido1 = $_POST['Apellido1'];//
	$apellido2 = $_POST['Apellido2'];//
	$id = $_POST['Cedula'];
    $nacionalidad=$_POST['select'];//
    $pasaporte=$_POST['Id'];//
	$correo = $_POST['Email'];//
    $tarjeta=$_POST['Tarjeta'];//
    $ccv=$_POST['CCV'];//
    $vencimiento=$_POST['Fechav'];//
    $clave = md5($_POST['Clave']);
   

	
	$query="INSERT INTO usuarios VALUES ('$nombre','$apellido1','$apellido2','$id','$nacionalidad','$pasaporte','$correo','$tarjeta','$ccv','$vencimiento','$clave','0')";
	
	
	if(empty($nombre) || empty($apellido1) || empty($apellido2) || empty($id) || empty($nacionalidad) || empty($pasaporte) || empty($correo) || empty($tarjeta) || empty($ccv) || empty($vencimiento) || empty($clave) ) {
		echo '<script>
			  alert("Debe llenar todos los campos del formulario");
			  windows.history.go(-1);
			  </script>';
			 

		exit;
		header("Location: contact.php");
	}
	
	
	$verificarD = $mysqli->query("SELECT * FROM usuarios WHERE Cedula = '$id'");
	if($verificarD->num_rows>0) {
		echo '<script>
			  alert("Ya existe un usuario registrado con el mismo ID");
			  windows.history.go(-1);
			  </script>';
		
		exit;
		header("Location: contact.html");
	}
	
	
	if($mysqli->query($query)){
		
		echo '<script>
		  alert("El usuario ha sido registrado existosamente");
		  windows.history.go(-1);
		  </script>';
		  exit;
		  header("Location: index.php");
		  
	}
	
	
	else{
		echo '<script>
		  alert("Error al registrarse");
		  windows.history.go(-1);
		  </script>';
		  exit;
		  header("Location: index.php");
		  
	}
	//mysqli_close($mysqli);

	
?>