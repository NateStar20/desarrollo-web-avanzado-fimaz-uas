<?php
/**
 * Clase Admin que hereda de Usuario.
 * @package Usuarios
 */
require 'Usuario.php';

class Admin extends Usuario {
    /**
     * Retorna el rol específico de esta clase.
     * @return string
     */
    public function getRol() 
    {
        return "Administrador";
    }
}
