<?php
 class Usuario {

    private $vNombre;
    private $vCorreo;

    public function __construct($nombre,$correo)
    {
        $this->vNombre=$nombre;
        $this->vCorreo=$correo;    
    }

    public function getNombre() 
    {
        return $this->vNombre;
    }

    public function getCorreo()
    {
        return $this->vCorreo;
    }

    public function setNombre()
    {
        return $this->vNombre;
    }

    public function setCorreo()
    {
        return $this->vCorreo;
    }
}
