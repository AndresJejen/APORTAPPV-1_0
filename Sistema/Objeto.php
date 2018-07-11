<?php
require 'conexion.php';

$Connecta = new conexion();

$result=$Connecta->SELECT("call LoginValidate('".$_POST['nombre']."','".$_POST['passw']."')");

if($result->num_rows == 1):
    $datos = mysqli_fetch_array($result);
    echo json_encode(array('error' => false));
else:
    echo json_encode(array('error' => true));
endif;
?>