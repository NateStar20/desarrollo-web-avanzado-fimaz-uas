<?php

require_once 'clases/Alumno.php';
require_once 'clases/Admin.php';

try {
    echo "<h2> Prueba de Usuarios validos </h2>";
    
    $objAdmin1 = new Admin("Gerardo Sanchez","gerardosr118@gmail.com");
    echo '<p> Nombre: ' . $objAdmin1->getNombre() . '</p>';
    echo '<p> Correo: ' . $objAdmin1->getCorreo() . '</p>';
    echo '<p> Rol: ' . $objAdmin1->getRol() . '</p>';

    $objAlumno1 = new Alumno("Fernando Peñafiel", "Fernandopena13@gmail.com","2071530");
    echo '<p> Nombre: ' . $objAlumno1->getNombre() . '</p>';
    echo '<p> Correo: ' . $objAlumno1->getCorreo() . '</p>';
    echo '<p> Matricula: ' . $objAlumno1->getMatricula() . '</p>';
    echo '<p> Rol: ' . $objAlumno1->getRol() . '</p>';

    echo "<h3> Prueba de Usuarios invalidos </h3>";

    $objInvalido = new Alumno("Alejandra Noriega","este-correo-invalido","1245957");
    }catch (Exception $e) {
    echo "<div style='background-color: #ffe6e6; color: #cc0000; border: 1px solid #cc0000; padding: 10px; border-radius: 5px;'>";
    echo "<strong>¡Excepción Controlada!:</strong> " . $e->getMessage();
    echo "</div>";
}
?>

