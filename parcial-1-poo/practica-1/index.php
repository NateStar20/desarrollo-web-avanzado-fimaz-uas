<?php

//Se incluye el archivo de la clase
require 'Usuario.php'; 

//Creacion de la instancia
$objUsuario1 = new Usuario ("Gerardo Sanchez", "gerardosr118@gmail.com"); 

echo '<p> Nombre: ' . $objUsuario1->getNombre() . '</p>';   
echo '<p> Correo: ' . $objUsuario1->getCorreo() . '</p>';

//Actualizacion de la variable nombre
$objUsuario1->setNombre("Jose Rodriguez");
$objUsuario1->setCorreo("jose.gerardosr11@gmail.com");

echo '<p> Nombre nuevo: ' . $objUsuario1->getNombre() . '</p>';
echo '<p> Correo nuevo: ' . $objUsuario1->getCorreo() . '</p>';

?>
