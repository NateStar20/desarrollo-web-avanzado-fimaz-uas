<?php

/**
 * Clase base que gestiona la información principal de un Usuario.
 * Implementa reglas de negocio para validar la integridad de los datos
 * antes de instanciar el objeto.
 * @package Usuarios
 * @author Jose Gerardo Sanchez Rodriguez
 */
class Usuario {
    
    /**
     * El nombre completo del usuario.
     * @var string
     */
    protected $vNombre;

    /**
     * La dirección de correo electrónico del usuario.
     * @var string
     */
    protected $vCorreo;

    /**
     * Constructor de la clase Usuario.
     * Verifica que el formato del correo sea válido antes de asignarlo.
     * @param string $nombre Nombre inicial del usuario.
     * @param string $correo Correo del usuario a validar.
     * @throws Exception Si el correo ingresado no tiene un formato de email válido.
     */
    public function __construct($nombre, $correo)
    {
        // Validación de la regla de negocio mediante filtros de PHP
        if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
            // Se lanza la excepción para evitar la creación de un objeto corrupto
            throw new Exception("Error: el correo '$correo' no cumple con el formato correcto");
        }

        $this->vNombre = $nombre;
        $this->vCorreo = $correo;
    }

    /**
     * Obtiene el nombre del usuario.
     * @return string El nombre almacenado.
     */
    public function getNombre()
    {
        return $this->vNombre;
    }

    /**
     * Obtiene el correo del usuario.
     * @return string El correo almacenado.
     */
    public function getCorreo()
    {
        return $this->vCorreo;
    }
}
