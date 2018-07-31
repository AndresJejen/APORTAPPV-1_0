<?php
try
{
    session_start();
    error_reporting(0);
    $varsesion = $_SESSION['usuario'];
    if($varsesion == null ||  $varsesion == '')
    {
        
    }
    else
    {
        header("LOCATION: GUI/");    
    }
}
catch(Exception $e)
{
    echo "<script> alert('Ha ocurrido el siguiente error, por favor tome nota y enviarlo al Administrador del sistema  [Session Login] ".$e."') </script>";
}          
?>

<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>LOGIN APORTAPP 1.0</title>
  
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
    <link rel="stylesheet" href="css/Login/LoginStyle.css">
    <link rel="stylesheet" href="css/Alertifycss/alertify.css">
    <link rel="stylesheet" href="css/Alertifycss/themes/default.css">

    <script src="Scripts/General/jquery/jquery-3.1.1.min.js"></script>
    <script src="Scripts/Login/ScriptConsultaLogin.js"></script>
    <script src="Scripts/General/alertifyjs/alertify.js"></script>
    <script src="Scripts/Login/ScriptPasoRecuperar.js"></script>
</head>

<body>
<div class="header">
Bienvenido a APORTAPP v. 1.0  Ubicación del Servidor: Bogotá
</div>
  <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Ingreso</label>
		<div class="login-form">
			<div class="sign-up-htm">
			<form action="" id=formulario  method="post">
				<div class="group">
					<label for="nombre" class="label">Usuario</label>
					<input  name="nombre" id='nombre' pattern="[A-Za-z0-9_-]{1,20}" type="text" class="input" required/>
				</div>
				<div class="group">
					<label for="passw" class="label">Contraseña</label>
					<input name="passw" id='passw' pattern="[A-Za-z0-9_-]{1,20}" type="password" class="input" data-type="password" required/>
				</div>
				<center>
				<div class="group">
					<input type="submit" class="button_2" value="Ingresar">
				</div>
                   </center>
                    </form>
				<div class="hr"></div>    
				<center>
                <form action="" method="POST" id=form>                               
                    <button class="button" type="submit" id=UsOlvido name="UsOlvido"  value="" class="btn-link">¿ Olvidaste la contraseña ?</button>
                </form>
                </center>
			</div>
		</div>
	</div>
</div>
<div class="base">  
&copy; 2018 CoopesingUD.com
<div id="fecha"></div>
<script src="Scripts/General/Reloj.js"></script>
<div id="reloj" style="font-size:20px;"></div>
</div>
</body>
</html>