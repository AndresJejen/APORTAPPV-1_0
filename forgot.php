<?php
try
{
    if(isset($_POST['UsOlvido']))
    {
        if(!($_POST['UsOlvido']==""))
        {
            $UsOlvido = $_POST['UsOlvido'];    
        }
        else
        {    
            $UsOlvido = "USUARIO NO VALIDO";    
        }
    }
    else
    {
        $UsOlvido = "USUARIO NO VALIDO";
    }
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
    
}          
?>
<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8" />
    <title>Recuperar Contraseña</title>

    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
    <link rel="stylesheet" href="css/Login/LoginStyle.css">
    <link rel="stylesheet" href="css/Alertifycss/alertify.css">
    <link rel="stylesheet" href="css/Alertifycss/themes/default.css">

    <script src="Scripts/General/jquery/jquery-3.1.1.min.js"></script>
    <script src="Scripts/General/alertifyjs/alertify.js"></script>   
</head>
<body>

<div class="header">
Bienvenido a APORTAPP v. 1.0  Ubicación del Servidor: Bogotá
</div>
  
 <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Olvido</label>
		<div class="login-form">
                    
			
			<div class="sign-up-htm">
			<form action="" id="formulario" value="flogin">
				<div class="group">
					<label for="RecuUsuario" class="label">Usuario</label>
                    <label id="RecuUsuario" name="RecuUsuario"  type="text" class="input"><?php echo $UsOlvido ?></label>
				</div>
				<div class="group">
					<label for="RecuPregunta" class="label">Pregunta </label>
                    <label id="RecuPregunta" name="RecuPregunta" class="input" type="text" >¿  ?</label>
				</div>
                                <div class="group">
					<label for="RecuRespuesta" class="label">Respuesta</label>
					<input id="RecuRespuesta" name="RecuRespuesta" pattern="[A-Z a-z0-9_-]{1,50}" class="input" type="text" required>
				</div>
                                <div class="group">
					<label for="RecuPass" class="label">Nueva Contraseña</label>
					<input id="RecuPass" name ="RecuPass" pattern="[A-Za-z0-9_-]{1,20}" type="password" class="input" data-type="password" required>
				</div>
                                <div class="group">
					<label for="RecuConfPass" class="label">Verificar Contraseña </label>
					<input id="RecuConfPass" name ="RecuConfPass" pattern="[A-Za-z0-9_-]{1,20}" type="password" class="input" data-type="password" required>
				</div>
				<center>
				<div class="group">
					<input type="submit" class="button_2" value="Verificar">
				</div>
				<div class="hr"></div>
				</center>
                </form>
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
</body>>
</html>