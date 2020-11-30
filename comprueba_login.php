<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

try{

    //INSTANCIANDO clase PDO
    $base=new PDO("mysql:host=localhost; dbname=curso_sql", "root", "");

    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //SQL para ver si usuario existe o no existe en BBDD
    $sql="SELECT * FROM USUARIOS_PASS WHERE USUARIOS= :login AND PASSWORD= :password"; //:login es un marcador

    //consulta preparada con marcadores
    $resultado=$base->prepare($sql);

    //rescantado login y password
    $login=htmlentities(addslashes($_POST["login"])); //convierte cualquieer simbolo en html. Evitar inyeccion SQL

    $password=htmlentities(addslashes($_POST["password"]));

    //bindValue para cuando son marcadores
    $resultado->bindValue(":login", $login);
    $resultado->bindValue(":password", $password);

    //rowCount nos dice el numero de registros que devuelve una consulta

    $resultado->execute();

    $numero_registro=$resultado->rowCount();

    //Evaluando si usuario existe o no. Existe devuelve 1. No existe devuelve 0
    if($numero_registro!=0){
        echo "<h2> Adelante Ecuatoriano Adelante </h2>";
    }
    else
    {
        //redirigir a la misma pagina de registro
        header("location:login.php");



    }




} catch (Exception $e) {

    die("Error: " . $e->getMessage()); //concatena mensaje de error

}






?>
</body>
</html>