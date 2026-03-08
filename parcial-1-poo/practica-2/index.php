<?php

require 'Admin.php';

$objAdmin1 = new Admin ("Gerardo Sanchez", "gerardosr118@gmail.com");

echo '<p> Nombre: ' . $objAdmin1->getNombre() . '</p>';
echo '<p> Correo: ' . $objAdmin1->getCorreo() . '</p>';
echo '<p> Rol: ' . $objAdmin1->getRol() . '</p>';

?>
