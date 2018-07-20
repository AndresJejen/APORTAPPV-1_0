<?php
        require 'conexion.php';
        $consulta = "";

        if(isset($_POST["passw"])) //Si la consulta viene de LOGIN
		{
            $consulta = "call LoginValidate('".$_POST['nombre']."','".$_POST['passw']."')";
            //Consulta para pruebas de php $consulta = "SELECT * FROM Administrador;";
            $datos = seleccionador($consulta); 
            
            if($datos)
            {
                echo json_encode(array('error' => false));
                session_start();
                $_SESSION['usuario'] = $datos;
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
    if($consult)
        {
            $Connecta = new conexion();
            $result = $Connecta->SELECT($consult);
            if($result)
            {
                $arreglo["data"] = [];
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