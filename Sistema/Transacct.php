<?php

require '../Persistencia/conexion.php';
$consulta = "";

    if(isset($_POST['UpdatePass'])) //Si la consulta viene de UpdatePassw
		{
            $consulta = "call UpdatePass('".$_POST['UpdatePassUser']."','".$_POST['UpdatePass']."')";
            $datos = Ejecutar($consulta); 
            
            if(!$datos)
            {
                echo json_encode(array('error' => false));
            }
            else
            {
                echo json_encode(array('error' => true));
            }
		}
        else
        {
                
        }

function Ejecutar($consult){
    if($consult)
        {
            $Connecta = new conexion();
            $result = $Connecta->Transact($consult);
            return $result;
        }
        else
        {
            return true;
        }
}

?>