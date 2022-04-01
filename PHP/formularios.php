<?php
    //conexion conbase de datos
    session_start();
    include("./config.php");
    $_SESSION["Correo"]=$_POST["Correo"];
    $c = connectdb(); 
    $ingreso=0;
    $ingreso1=0;
    //valor a variables con lo enviado en forms
    if(htmlspecialchars($_POST['Correo']))
    $arr= array();
    $arr[0]= htmlspecialchars($_POST['Nombre']);
    $arr[1]= htmlspecialchars($_POST['Apepa']);
    $arr[2]= htmlspecialchars($_POST['Apema']);
    $arr[3]= htmlspecialchars($_POST['Correo']);
    $arr[4]= htmlspecialchars($_POST['Telefono']);
    $arr[5]= htmlspecialchars($_POST['Usuario']);
    $contra= htmlspecialchars($_POST['Contraseña']);
    $i=0;
    $arr2= array();

    //Insertamos los valores del form en la tabla de usuarios
    if($i==0){
        $ingreso = "INSERT INTO usuario(Nombre, Apellido_paterno, Apellido_materno, Correo, Telefono, Nombre_usuario, Contraseña) VALUES('".$arr[0]."', '".$arr[1]."', '".$arr[2]."', '".$arr[3]."', '".$arr[4]."', '".$arr[5]."', '".$contra."')";
        $r = mysqli_query($c, $ingreso);
        echo "exito";
        echo $arr[0];
        print_r($arr);
        $ingreso1 = "SELECT * FROM usuario;";
        $r1 = mysqli_query($c, $ingreso1);
        print_r($r1);
        $_SESSION["Correo"]=$_POST["Correo"];
        //header("location: ../TEMPLATES/index.html");
    }
    else{
        echo $ingreso;
    }
?>