<?php

class Usuario {

    protected $vNombre;
    protected $vCorreo;

    public function __construct($nombre,$correo)
    {
        if(!filter_var($correo,FILTER_VALIDATE_EMAIL)){
            throw new Exception("El correo '$correo' es invalido, por favor intente de nuevo." );
        }

        $this->vNombre = $nombre;
        $this->vCorreo = $correo;
    }

    public function getNombre()
    {
        return $this->vNombre;
    }
    public function getCorreo()
    {
        return $this->vCorreo;
    }
}