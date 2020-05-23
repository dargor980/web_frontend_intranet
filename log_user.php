<?php
    session_start();

    $email = $_POST['usuario'];
    $password = $_POST['password'];

    // parámetros de conexión a la base de datos
    $nombreServer = "localhost";
    $userDatabase = "root";
    $passwordDatabase = "";
    $database = "tecnidata";

    //conexion a la base de datos.
    $con = mysqli_connect($nombreServer,$userDatabase,$passwordDatabase,$database) or
        die("Error en la conexion a la base de datos");
    
    $registro = mysqli_query($con,"SELECT * FROM usuario WHERE correo_empresa='$email' AND password='$password'") or
        die("Error en el query: " . mysqli_error($con));
    
    if($reg=mysqli_fetch_array($registro)){
        $_SESSION['email'] = $email;
        header("Location: userPanel.php"); 
    }
    else{
        echo "El email o password es incorrecto";
    }



?>