<?php 
class conexion 
{
//Campos
    private  $Server = 'localhost';
    private  $Usuario = 'root';
    private  $Password = '';
    private  $DB = 'Aportapp1_0';
    private $mysqli;
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
       $this->mysqli = mysqli_connect($this->GetServer(),$this->GetUsuario(),$this->GetPassword(),$this->GetDb()); 
        
        if(!$this->mysqli)
        {
            echo "Error al conectarse ".$mysqli->connect_error;
        }
        else
        {
            echo "Conexión Exitosa";
        }
        
    }
    //Métodos
    public function SELECT($Procedimiento)
    {
        $result=$this->mysqli->query($Procedimiento);
        $this->mysqli->close();
        return $result;
    }
    
}
?>