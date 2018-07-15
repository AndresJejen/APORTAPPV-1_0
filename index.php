<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>LOGIN APORTAPP 1.0</title>
  
  
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
<link rel="stylesheet" href="css/LoginStyle.css">

</head>

<body>
<script src="Scripts/jquery-3.1.1.min.js"></script>
<script src="Scripts/ScriptConsultaLogin.js"></script>
<div class="header">
    <?php
        $bienvenido = "Bienvenido a APORTAPP v. 2.0  Ubicación del Servidor: Bogotá";
        echo $bienvenido;
        ?>
    </div>
   
  <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Ingreso</label>
		<div class="login-form">
                    
			
			<div class="sign-up-htm">
			<form action="" id=formulario>
				<div class="group">
					<label for="user"  class="label">Usuario</label>
					<input  name="nombre" pattern="[A-Za-z0-9_-]{1,20}" type="text" class="input" required/>
				</div>
				<div class="group">
					<label for="pass" class="label">Contraseña</label>
					<input name="passw" pattern="[A-Za-z0-9_-]{1,20}" type="password" class="input" data-type="password" required/>
				</div>
				<center>
				<div class="group">
					<input type="submit" class="button_2" value="Ingresar">
				</div>
                    </form>
				<div class="hr"></div>
                                </center>
				<center>
                                <form action="forgot.php" method="POST">                               
                                    <button class="button" type="submit" name="your_name" value="your_value" class="btn-link">¿ Olvidaste la contraseña ?</button>
                                </form>
                                </center>
			</div>
		</div>
	</div>
</div>
<div class="base">  
&copy; 2018 CoopesingUD.com
    <div id="fecha"></div>

<script type="text/javascript">
function startTime(){
today=new Date();
h=today.getHours();
m=today.getMinutes();
s=today.getSeconds();
m=checkTime(m);
s=checkTime(s);
document.getElementById('reloj').innerHTML=h+":"+m+":"+s;
t=setTimeout('startTime()',500);}
function changeday()
{
    
var d = new Date();
    
    var months = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
         "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
    
//document.write('Fecha: '+d.getDate(),"/"+months[d.getMonth()],"/"+d.getFullYear());    
document.getElementById('fecha').innerHTML="Fecha: "+d.getDate()+" / "+months[d.getMonth()]+" / "+d.getFullYear();
    
}    
function checkTime(i)
{if (i<10) {i="0" + i;}return i;}
window.onload=function(){startTime();changeday();}
</script>
<div id="reloj" style="font-size:20px;"></div>
</div>
</body>
</html>
