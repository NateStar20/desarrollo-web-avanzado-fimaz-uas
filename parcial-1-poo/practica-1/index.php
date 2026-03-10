<?php

//Se incluye el archivo de la clase
require 'Usuario.php'; 

//Creacion de la instancia
$objUsuario1 = new Usuario ("Gerardo Sanchez", "gerardosr118@gmail.com"); 

echo '<p> Nombre: ' . $objUsuario1->getNombre() . '</p>';   
echo '<p> Correo: ' . $objUsuario1->getCorreo() . '</p>';

//Actualizacion de la variable nombre
$objUsuario1->setNombre("Jose Rodriguez"); 

echo '<p> Nombre: ' . $objUsuario1->getNombre() . '</p>';
echo '<p> Correo: ' . $objUsuario1->getCorreo() . '</p>';

?>
