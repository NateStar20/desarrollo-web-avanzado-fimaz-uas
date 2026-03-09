<?php

require_once 'Usuario.php';

/**
 * Clase que representa a un Invitado dentro del sistema.
 * Hereda los atributos y comportamientos de la clase base Usuario.
 * @package Usuarios
 * @author Jose Gerardo Sanchez Rodriguez
 */
class Invitado extends Usuario {

    /**
     * La empresa a la que representa el invitado.
     * @var string
     */
    private $vEmpresa;

    /**
     * Constructor de la clase Invitado.
     * Inicializa los datos del invitado, delegando la validación del correo 
     * a la clase padre.
     * @param string $nombre Nombre completo del invitado.
     * @param string $correo Correo del invitado (validado por el padre).
     * @param string $empresa Empresa de la que proviene el invitado.
     */
    public function __construct($nombre, $correo, $empresa)
    {
        // Se llama al constructor de la clase base para reutilizar su lógica y validación
        parent::__construct($nombre, $correo);

        $this->vEmpresa = $empresa;
    }

    /**
     * Obtiene la empresa del invitado.
     * @return string La empresa almacenada.
     */
    public function getEmpresa()
    {
        return $this->vEmpresa;
    }

    /**
     * Obtiene el rol del usuario en el sistema.
     * Define el comportamiento específico para el perfil de Invitado.
     * @return string Retorna la cadena "Invitado".
     */
    public function getRol()
    {
        return "Invitado";
    }
}