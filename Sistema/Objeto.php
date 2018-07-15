<?php
require 'conexion.php';

class objeto
{
    //campos
    private $Codigo1;
    //Encapsulamiento
    public function SetCodigo1($_Codigo1)
        {
            $this->Codigo1 = $_Codigo1;
        }
        
    public function GetCodigo1()
    {
        return $this->Codigo1;
    }
    //Constructor
    public function __construct()
    {
        
    }
    //Métodos
}

?>