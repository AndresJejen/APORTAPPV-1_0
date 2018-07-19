<?php
        require 'conexion.php';
        $consulta = "";
        $Connecta = new conexion();

        if(isset($_POST["passw"])) //Si la consulta viene de LOGIN
		{
            $consulta = "call LoginValidate('".$_POST['nombre']."','".$_POST['passw']."')";
            $datos = seleccionador($consulta); 
            if(!$datos)
            {
                session_start();
                $_SESSION['usuario'] = $datos;
                echo json_encode(array('error' => false,'datos'=>$datos));
            }
            else
            {
                echo json_encode(array('error' => true));
            }
		}
		else
		{

		}

function seleccionador($consult){
        if(!$consult)
        {
            $result=$Connecta->SELECT($consulta);
            
            if(!$result)
            {
                while($datos = mysqli_fetch_assoc($result))
                {
                    $arreglo["data"][] = $datos;    
                }
                return $arreglo;
            }
            else
            {
                die("Error en Consulta");
                return false;
            }
            mysqli_free_result($result);
        }
        else
        {
            return false;
        }
}
?>