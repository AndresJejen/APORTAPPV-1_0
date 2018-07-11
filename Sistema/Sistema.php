<?php
require 'conexion.php';

$Connecta = new conexion();

$result=$Connecta->SELECT("call LoginValidate('Admin2','123456')");

mysqli_data_seek ($result, 0);

$extraido= mysqli_fetch_array($result);

echo "- Nombre: ".$extraido[1]."<br/>";

echo "- Contraseña: ".$extraido[2]."<br/>";

echo "- Pregunta: ".$extraido[3]."<br/>";

echo "- Respuesta: ".$extraido[4]."<br/>";

mysqli_free_result($result);
?>