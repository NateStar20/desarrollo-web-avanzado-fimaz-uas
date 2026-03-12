<?php

require_once 'Usuario.php';

class Alumno extends Usuario{

    private $vMatricula;

    public function __construct($nombre,$correo,$matricula)
    {
        parent ::__construct($nombre,$correo);

        $this->vMatricula = $matricula;
    }

    public function getRol()
    {
        return "Alumno";
    }

    public function getMatricula()
    {
        return $this->vMatricula;
    }
}