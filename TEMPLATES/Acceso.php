<?php
    include "../PHP/config.php";
    $con = connectdb();

    $sql = "SELECT * FROM usuario";
    $query = mysqli_query($con,$sql);

    $row =mysqli_fetch_array($query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/normalize.css">
    <link rel="stylesheet" href="../CSS/styles.css">
    <link rel="stylesheet" href="../CSS/acceso.css">
    <link rel="apple-touch-icon" sizes="57x57" href="/IMG/favicon.ico/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/IMG/favicon.ico/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/IMG/favicon.ico/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/IMG/favicon.ico/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/IMG/favicon.ico/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/IMG/favicon.ico/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/IMG/favicon.ico/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/IMG/favicon.ico/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/IMG/favicon.ico/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/IMG/favicon.ico/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/IMG/favicon.ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/IMG/favicon.ico/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/IMG/favicon.ico/favicon-16x16.png">
    <link rel="manifest" href="/IMG/favicon.ico/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/IMG/favicon.ico/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
    <header class="header">
        <div class="barra">
            <a class="logo" href="#">
                <h1 class="logo__nombre no-margin centrar-texto">Dise??o y Desarrollo<span class="logo__bold">web</span></h1>
            </a>

            <nav class="navegacion">
            </nav>
        </div>
    </header>
    <div id="Iniciar_sesion">
        <form id="formulario" action="./../PHP/formularios.php" method="post">
            <h4>Inciar Sesion</h4>
            <div id="usuario-sesion">
                <label for="Nombre de usuario">Nombre de usuario:</label><br>
                <input type="text" name="usuario"><br>
            </div>
            
            <div id="Sesion-password">
                <label for="Contrase??a">Contrase??a:</label><br>
                <input type="password" name="contrase??a"><br>
            </div>
            
            <a href=""><button class="boton">Enviar</button></a>
        </form>
        
    </div>
    <br>
    <br>

    <div id="Crear_cuenta">
        <form action="../PHP/insertar.php"" method="POST">
            <h4>Crear cuenta</h4>
            <label for="Nombre">Nombre:</label><br>
            <input type="text" name="Nombre"><br>
            <label for="Apellido Paterno">Apellido Paterno:</label><br>
            <input type="text" name="Apellido_paterno"><br>
            <label for="Apellido Materno">Apellido Materno:</label><br>
            <input type="text" name="Apellido_materno"><br>
            <label for="Correo">Correo:</label><br>
            <input type="email" name="Correo"><br>
            <label for="Nombre de usuario">Nombre de usario:</label><br>
            <input type="text" name="Nombre_usuario"><br>
            <label for="Telefono">Telefono:</label><br>
            <input type="number" name="Telefono"><br>
            <label for="Contrase??a">Contrase??a:</label><br>
            <input type="password" name="Contrase??a"><br>
            <a><button class="boton" type="submit" name="Boton">Enviar</button><br></a>
        </form>
    </div>
    <br>
    <br>


    <footer class="footer ft">
        <div class="contenedor barra">
            <a class="logo" href="#">
                <h1 class="logo__nombre no-margin centrar-texto">Dise??o y Desarrollo<span class="logo__bold">web</span></h1>
            </a>

            <p class="no-margin centrar-texto">
                ??Todos los derechos reservados 2022
            </p>
        </div>
    </footer>

    <script src="../JS/funciones.js"></script>
</body>
</html>