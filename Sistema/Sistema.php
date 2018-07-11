<?php
require 'conexion.php';
$datos = array("_Nombre"=>"Admin2","_Pass"=>"123456");

$Connecta = new conexion();

$result=$Connecta->SELECT("call LoginValidate('Admin2','123456')");

mysqli_data_seek ($result, 0);

$extraido= mysqli_fetch_array($result);

echo "- Nombre: ".$extraido['NombreAdmin']."<br/>";

echo "- Contraseña: ".$extraido[2]."<br/>";

echo "- Pregunta: ".$extraido['Pregunta']."<br/>";

echo "- Respuesta: ".$extraido['Respuesta']."<br/>";

mysqli_free_result($result);
?>