<?php

require_once 'clases/Alumno.php';
require_once 'clases/Admin.php';
require_once 'clases/Invitado.php';

//arreglo vacío
$usuarios = [];

try {
    //Creacion de los 3 objetos válidos y agregarlos al arreglo
    $objAdmin1 = new Admin("Gerardo Sanchez", "gerardosr118@gmail.com");
    $usuarios[] = $objAdmin1; // Se guarda en el arreglo

    $objAlumno1 = new Alumno("Fernando Peñafiel", "Fernandopena13@gmail.com", "2071530");
    $usuarios[] = $objAlumno1;

    $objInvitado1 = new Invitado("Juan Ibarra", "juanibarra30@gmail.com", "Steren");
    $usuarios[] = $objInvitado1;

    // objeto con correo inválido
    $objInvalido = new Alumno("Alejandra Noriega", "alejandranor.gmail.com", "1245957");
    
    // Esta línea NUNCA se ejecuta porque la excepción interrumpe el flujo antes
    $usuarios[] = $objInvalido; 

} catch (Exception $e) {
    // 4. Mostrar mensaje controlado
    echo "<div style='background-color: #ffe6e6; color: #cc0000; border: 1px solid #cc0000; padding: 10px; border-radius: 5px; margin-bottom: 20px;'>";
    echo "<strong>¡Error Controlado!:</strong> " . $e->getMessage();
    echo "</div>";
}

// Tabla html
echo "<h2>Lista de Usuarios Válidos</h2>";
echo "<table border='1' cellpadding='10' cellspacing='0' style='border-collapse: collapse; width: 100%; text-align: left;'>";
echo "<thead style='background-color: #f2f2f2;'>";
echo "<tr>";
echo "<th>Nombre</th>";
echo "<th>Correo</th>";
echo "<th>Rol</th>";
echo "<th>Detalle (Matrícula / Empresa)</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

// Recorremos el arreglo para llenar la tabla dinámicamente
foreach ($usuarios as $usuario) {
    echo "<tr>";
    echo "<td>" . $usuario->getNombre() . "</td>";
    echo "<td>" . $usuario->getCorreo() . "</td>";
    echo "<td>" . $usuario->getRol() . "</td>";
    
    // Un poco de lógica extra para saber qué dato extra imprimir dependiendo del tipo de objeto
    echo "<td>";
    if ($usuario instanceof Alumno) {
        echo "Matrícula: " . $usuario->getMatricula();
    } elseif ($usuario instanceof Invitado) {
        echo "Empresa: " . $usuario->getEmpresa();
    } else {
        echo "N/A"; // El Admin no tiene dato extra
    }
    echo "</td>";
    
    echo "</tr>";
}

echo "</tbody>";
echo "</table>";

?>
