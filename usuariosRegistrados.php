<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<?php
//reanudar sesion que se creo para el usuario logeado
session_start();

if(!isset($_SESSION["usuario"])){
    header("Location:login.php");
}

?>
<h1>Bienvenidos usuarios</h1>
<?php
echo "Hola " . $_SESSION["usuario"] . "<br><br>";
?> 



<table width="200" border="1">
<tbody>
    <tr>
    <td colspan=3>Zona Usuarios Registrados</td>
    </tr>
    <tr>
    <td><a href="usuariosRegistrados2.php">Página 2</a></td>
    <td><a href="usuariosRegistrados3.php">Página 3</a></td>
    <td><a href="usuariosRegistrados4.php">Página 4</a></td>
    </tr>
</tbody>
</table>

<p><a href="cierre.php">Cerrar sesión</a></p>
</head>
<body>
</body>
</html>