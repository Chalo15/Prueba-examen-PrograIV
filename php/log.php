<?php
ob_start();
    $usuario=$_POST['usuario'];

    $clave=md5($_POST['clave']);

    $query="SELECT * FROM usuarios WHERE Cedula='$usuario' AND Clave='$clave'";



    $consulta2=$mysqli->query($query);

    if($consulta2->num_rows>=1){

        $fila=$consulta2->fetch_array(MYSQLI_ASSOC);

        @session_start();
        
        $_SESSION['user']=$fila['Nombre'];
        $_SESSION['Identi']=$fila['Cedula'];
        $_SESSION['verificar']=true;
        $_SESSION['start'] = time();
        $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
        
        //require_once('../comprar.php');
       header("Location: comprar.php");
        echo"Prueba";
    }else{

        echo "Los datos son incorrectos";
        header("Location: Login.php");
    }
  //  mysqli_close($mysqli);
   // mysqli_close($conexion); 
   //ob_end_flush();
?>