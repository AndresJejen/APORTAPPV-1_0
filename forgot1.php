<!DOCTYPE html>
<html class="no-js">
<head>
<meta charset="utf-8" />
<title>jQuery Show Password Plugin</title>

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>

      <link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="header">
    <?php
        $bienvenido = "Bienvenido a APORTAPP v. 2.0  Ubicación del Servidor: Bogotá";
        echo $bienvenido;
        ?>
    </div>
  
 <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Olvido</label>
		<div class="login-form">
                    
			
			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Usuario</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Pregunta </label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
                                <div class="group">
					<label for="pass" class="label">Respuesta </label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
                                <div class="group">
					<label for="pass" class="label">Nueva Contraseña</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
                                <div class="group">
					<label for="pass" class="label">Verificar Contraseña </label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<center>
				<div class="group">
					<input type="submit" class="button_2" value="Verificar">
				</div>
				<div class="hr"></div>
				</center>
			</div>
		</div>
	</div>
</div>
<div class="base">  
&copy; 2018 CoopesingUD.com
<script type="text/javascript">
    var d = new Date();
    document.write('Fecha: '+d.getDate(),"/"+d.getMonth(),"/"+d.getFullYear());
</script>
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
function checkTime(i)
{if (i<10) {i="0" + i;}return i;}
window.onload=function(){startTime();}
</script>
<div id="reloj" style="font-size:20px;"></div>
</div>
</body>>
</html>