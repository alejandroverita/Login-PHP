


<?php
//crear codigo para cerrar session cuando salga usuario

session_start();

session_destroy();


//redirigir a seccion de login
header("location:login.php");

//incluir en demas paginas de acceso restringido un enlace a este archivo










?>