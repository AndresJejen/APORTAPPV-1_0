<?php
class conexion 
{
//Campos
    private  $Server = 'localhost';
    private  $Usuario = 'root';
    private  $Password = '';
    private  $DB = 'Aportapp1_0';
    private  $vmysqli = false;
//Encapsulamiento
    public function SetServer($_Server)
    {
        $this->Server = $_Server;
    }
    
    public function GetServer()
    {
        return $this->Server;
    }
    
    public function SetUsuario($_Usuario)
    {
        $this->Usuario = $_Usuario;
    }
    
    public function GetUsuario()
    {
        return $this->Usuario;
    }
    
    public function SetPassword($_Password)
    {
        $this->Password = $_Password;
    }
    
    public function GetPassword()
    {
        return $this->Password;
    }
    
    public function SetDb($_Db)
    {
        $this->Db = $_Db;
    }
    
    public function GetDb()
    {
        return $this->DB;
    }
    //Constructor
    public function __construct()
    {
       $this->vmysqli = mysqli_connect($this->GetServer(),$this->GetUsuario(),$this->GetPassword(),$this->GetDb()); 
         
        if(!$this->vmysqli)
        {
            echo "Error al conectarse ".$mysqli->connect_error;
        }
        else
        {
            //$this->vmysqli->set_charset("utf8");
            //echo "Conexión Exitosa";
        }
        
    }
    //Métodos
    public function SELECT($Procedimiento)
    {
        $this->vmysqli->autocommit(TRUE);
        $result=$this->vmysqli->query($Procedimiento);
        $this->vmysqli->close();
        return $result;
    }
    public function Transact($Procedimiento)
    {
        try{
            $this->vmysqli->autocommit(FALSE);
            $this->vmysqli->begin_transaction(MYSQLI_TRANS_START_WITH_CONSISTENT_SNAPSHOT);
            if($result=$this->vmysqli->query($Procedimiento))
            {
                if($this->vmysqli->commit())
                {
                    return false;
                }
                else
                {
                    return true;
                }
            }
            else
            {
                $this->vmysqli->rollBack();
                return true;
            }
            $this->vmysqli->close();
        }
        catch(Exception $e)
        {
            echo "<script> alert('Ha ocurrido el siguiente error, por favor tome nota y enviarlo al Administrador del sistema  [Transsact] ".$e."') </script>";
        }
    }
}
?>