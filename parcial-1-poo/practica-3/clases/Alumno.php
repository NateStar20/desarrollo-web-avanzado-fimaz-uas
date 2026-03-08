<?php

require_once 'Usuario.php';

/**
 * Clase que representa a un Alumno dentro del sistema.
 * Hereda los atributos y comportamientos de la clase base Usuario.
 * @package Usuarios
 * @author Jose Gerardo Sanchez Rodriguez
 */
class Alumno extends Usuario {

    /**
     * La matrícula única asignada al alumno.
     * @var string
     */
    private $vMatricula;

    /**
     * Constructor de la clase Alumno.
     * Inicializa los datos del alumno, delegando la validación del correo 
     * a la clase padre.
     * @param string $nombre Nombre completo del alumno.
     * @param string $correo Correo del alumno (validado por el padre).
     * @param string $matricula Matrícula institucional del alumno.
     */
    public function __construct($nombre, $correo, $matricula)
    {
        // Se llama al constructor de la clase base para reutilizar su lógica y validación
        parent::__construct($nombre, $correo);

        $this->vMatricula = $matricula;
    }

    /**
     * Obtiene la matrícula del alumno.
     * @return string La matrícula almacenada.
     */
    public function getMatricula()
    {
        return $this->vMatricula;
    }

    /**
     * Obtiene el rol del usuario en el sistema.
     * Este método sobrescribe o define el comportamiento específico para el Alumno.
     * @return string Retorna la cadena "Alumno".
     */
    public function getRol()
    {
        return "Alumno";
    }
}

