<?php
    //conexion conbase de datos
    session_start();
    include("./config.php");
    $c = connectdb(); 
    $ingreso=0;
    //valor a variables con lo enviado en forms
    $arr= array();
    $arr[0]= htmlspecialchars($_POST["nombre"]);
    $arr[1]= htmlspecialchars($_POST["ncuenta"]);
    $contra= htmlspecialchars($_POST["contraseña"]);
    $arr[2]= htmlspecialchars($_POST["correo"]);
    $arr[3]= htmlspecialchars($_POST["numero"]);
    $arr[4]= htmlspecialchars($_POST["nacimiento"]);
    $año= htmlspecialchars($_POST["cursa"]);
    $arr[5]= htmlspecialchars($_POST["apellidop"]);
    $arr[6]= htmlspecialchars($_POST["apellidom"]);
    $arr2 = array();
    $i=0;
    $arr2= array();
    //codificamos la contraseña
    $options = [
        'cost' => 10,
        'salt' => "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!#$%&/()=?"
     ];
     $contra = password_hash($contra, PASSWORD_BCRYPT, $options);

    for($b=0; $b<7; $b++){
         $arr2[$b]=mysqli_real_escape_string($c, $arr[$b]);
    }
    //Insertamos los valores del form en la tabla de usuarios
    if($i==0){
        $ingreso = "INSERT INTO usuario(id_usuario, correo, Telefono, fecha_naci,año, contraseña, nombre, apellido_p, apellido_m) VALUES('$arr2[1]', '$arr2[2]', '$arr2[3]', '$arr[4]', '$año', '$contra', '$arr2[0]', '$arr2[5]', '$arr2[6]');";
        $r = mysqli_query($c, $ingreso);
        echo "exito";
        $_SESSION["correo"]=$_POST["correo"];
    }
    else{
        echo $ingreso;
    }
?>