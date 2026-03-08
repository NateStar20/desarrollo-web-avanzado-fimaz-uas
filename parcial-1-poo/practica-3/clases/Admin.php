<?php

require_once 'Usuario.php';

/**
 * Clase que representa a un Administrador dentro del sistema.
 * Hereda la estructura y las validaciones de la clase base Usuario.
 * @package Usuarios
 * @author Jose Gerardo Sanchez Rodriguez
 */
class Admin extends Usuario {

    /**
     * Obtiene el rol del usuario en el sistema.
     * Define el comportamiento específico para el perfil de Administrador.
     * @return string Retorna la cadena 'Administrador'.
     */
    public function getRol()
    {
        return 'Administrador';
    }
}
