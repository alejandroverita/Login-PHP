<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//reanudar sesion que se creo para el usuario logeado
session_start();

if(!isset($_SESSION["usuario"])){
    header("Location:login.php");
}
 




?>
<h1>Bienvenidos usuarios</h1>

<?php


echo "Usuario " . $_SESSION["usuario"] . "<br><br>";


?>

<p><a href="usuariosRegistrados.php">Volver</a></p>

<p><a href="cierre.php">Cerrar sesión</a></p>

</body>
</html>