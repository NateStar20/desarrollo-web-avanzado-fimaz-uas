<?php
include 'Usuario.php'; //Se incluye la clase para instanciarla

$objUsuario1 = new Usuario ("Gerardo Sanchez", "gerardosr118@gmail.com"); //Instancia de la clase Usuario

echo '<p> Nombre: ' . $objUsuario1->getNombre() . '</p>';   
echo '<p> Correo: ' . $objUsuario1->getCorreo() . '</p>';


$objUsuario1->setNombre("Jose Rodriguez");  //Modificacion de la variable nombre 

echo '<p> Nombre: ' . $objUsuario1->getNombre() . '</p>';
echo '<p> Correo: ' . $objUsuario1->getCorreo() . '</p>';
