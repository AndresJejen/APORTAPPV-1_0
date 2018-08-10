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
        elseif(isset($_POST["NIdPersona"]))
		{
            //echo "aqui";            
            //var_dump($_POST["Resp"]);
            //var_dump($_POST["User"]);
            $consulta = "call Nuevo_Asociado('".$_POST['NNombre']."','".$_POST['N1Ape']."','".$_POST['N2Ape']."','".$_POST['NIdPersona']."','".$_POST['NTId']."','".$_POST['NGenero']."','".$_POST['NdateNac']."','hoy','".$_POST['NContacto']."','".$_POST['NDireccion']."','1','".$_POST['NCorreo']."')";
            $datos = Ejecutar($consulta);
            if(!$datos)
            {
                echo json_encode(array('error' => false));
            }
            else
            {
                echo json_encode(array('error' => true,'messageerror'=>$datos));
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
            return $result;
        }
}

?>