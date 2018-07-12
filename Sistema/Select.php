<?php
        require 'conexion.php';
        $consulta = "";
        $tipoConsulta = 0; //Si es 1 si se envia datos consultados si es 1 no se envian

        $Connecta = new conexion();

        if(isset($_POST["passw"])) //Si la consulta viene de LOGIN
		{
            $tipoConsulta = 0;
            $consulta = "call LoginValidate('".$_POST['nombre']."','".$_POST['passw']."')";
		}
		else
		{

		}

        if($consulta != "")
        {
            $result=$Connecta->SELECT($consulta);
            if($result->num_rows > 0):
                $datos = mysqli_fetch_array($result);
                if($tipoConsulta == 0)
                {
                    echo json_encode(array('error' => false));
                }
                else
                {
                    echo json_encode(array('error' => false, 'tipo' => $result));
                }
                    
            else:
                echo json_encode(array('error' => true));
            endif;
        
            mysqli_free_result($result);
        }
        else
        {
            echo json_encode(array('error' => true));
        }
?>