<?php
try
{
    session_start();
    $varsesion = $_SESSION['usuario'];
    echo "Bienvenido al sistema APORTAPP Version 1";    
    echo "</br> Bienvenido ". $varsesion;
}
catch(Exception $e)
{
        if($varsesion == null || $varsesion == '')
        {
            echo 'Usted no tiene autorización';
            die();
        }
}    
        
?>
 
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title> Titulo </title>
        
    </head>
    <body>
        <a href="../Sistema/cerrar_Session.php">Cerrar Sesion</a>
    </body>    
</html>    