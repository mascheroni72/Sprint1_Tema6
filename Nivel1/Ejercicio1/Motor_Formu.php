<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
 if ($_SERVER ["REQUEST_METHOD"] == "POST"){
    $nomUsuario = $_POST["nombre"];
    $apeUsuario = $_POST["apellido"];
    $correo = $_POST["correo"];
    $contraseña = $_POST ["contraseña"];

    echo "<p>Nombre de usuario: $nomUsuario</p>";
    echo "<p>Apellido de usuario: $apeUsuario</p>";
    echo "<p>Correo electrónico: $correo</p>";
    echo "<p>Contraseña: $contraseña</p>";
 }else{
    echo "<p>Para entrar tienes que completar el formulario.</p>";
    }
    ?>   
</body>
</html>