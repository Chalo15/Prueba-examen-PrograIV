<?php

    $usuario=$_POST['usuario'];

    $clave=md5($_POST['clave']);

    $query="SELECT * FROM usuarios WHERE Cedula='$usuario' AND Clave='$clave'";

    echo $query;

    $consulta2=$mysqli->query($query);

    if($consulta2->num_rows>=1){

        $fila=$consulta2->fetch_array(MYSQLI_ASSOC);

        session_start();

        $_SESSION['user']=$fila['Nombre'];
        $_SESSION['Identi']=$fila['Id'];
        $_SESSION['verificar']=true;
        $_SESSION['start'] = time();
        $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

        header("Location: comprar.php");

    }else{

        echo "Los datos son incorrectos";
        header("Location: Login.php");
    }
    mysqli_close($mysqli);
   // mysqli_close($conexion); 
?>