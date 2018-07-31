<?php
        require '../Persistencia/conexion.php';
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
                //var_dump($_SESSION['usuario'] = $datos["data"][0]['NombreAdmin']);
                $_SESSION['usuario'] = $datos["data"][0]['NombreAdmin'];
                
            }
            else
            {
                echo json_encode(array('error' => true));
            }
		}
		elseif(isset($_POST["Olvido"]))
		{
            $consulta = "call AdminExist('".$_POST['Olvido']."')";
            $datos = seleccionador($consulta);
            
            if($datos["data"][0]['NombreAdmin']==$_POST["Olvido"] && $datos["data"][0]['NombreAdmin']!="")
            {
                echo json_encode(array('error' => false,'admin'=>$datos["data"][0]['NombreAdmin']));
            }
            else
            {
                echo json_encode(array('error' => true));
            }
		}
        elseif(isset($_POST["PUser"]))
		{
            //echo "aqui";            
            //var_dump($_POST["PUser"]);
            $consulta = "call SelectPreguntaOlvido('".$_POST['PUser']."')";
            $datos = seleccionador($consulta);
            if($datos["data"][0]['Pregunta']!="")
            {
                echo json_encode(array('error' => false,'Padmin'=>$datos["data"][0]['Pregunta']));
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
            if(mysqli_num_rows($result))
            {
                $arreglo["data"] = [];
                while($datos = mysqli_fetch_assoc($result))
                {
                    $arreglo["data"][] = array_map("utf8_encode",$datos);
                }
                return $arreglo;
            }
            else
            {
                //die("Error en Consulta");
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