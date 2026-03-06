<?php

 class Usuario {  //Creacion de la clase Usuario

    private $vNombre;   //Declaracion de los atributos privados
    private $vCorreo;

    public function __construct($nombre,$correo) // implementacion del constructor 
    {
        $this->vNombre=$nombre;     //los datos que reciba de fuera (parametro) se guardaran en esta variable (atributo)
        $this->vCorreo=$correo;    
    }

    public function getNombre() //lectura de la variable privada
    {
        return $this->vNombre;
    }

    public function getCorreo()
    {
        return $this->vCorreo;
    }

    public function setNombre($nombre) //Modificacion de la variable privada 
    {
        $this->vNombre =$nombre;
    }

    public function setCorreo($correo)
    {
        $this->vCorreo = $correo;
    }
}

 
