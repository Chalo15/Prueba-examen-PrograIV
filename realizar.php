<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="UTF-8">
	<title>Solicitar Campos</title>
</head>
<body>
	<?php
		if(isset($_GET['id'])){
			require_once "php/connect.php";
			$id=$_GET['id'];
			$query="SELECT * FROM rutas WHERE id_ruta='$id'";
			$consulta1=$mysqli->query($query);
			$fila=$consulta1->fetch_array(MYSQLI_ASSOC);
			echo '<form action="efectuarCompra.php" method="POST">
				<input type="hidden" name="id" value="'.$fila['id_ruta'].'">
				<input type="hidden" name="dispo" value="'.$fila['Cant_boletos'].'">
				<label>Campos solicitados</label><input type="number" name="campos" placeholder="Máximo 5 por persona"><br><br>
				<input type="submit" value="Comprar">
			</form>';
		}else{
			echo '<script>
			  alert("Error: no se pudo realiar la petición.");
			  windows.history.go(-1);
			  </script>';
		}
	?>
</body>
</html>