<?php

require_once 'clases/Admin.php';
require_once 'clases/Alumno.php';

$Usuarios = [];

try{
    $objAdmin1=new Admin ("Gerardo Sanchez","gerardo123@gmail.com");
    $Usuarios[]=$objAdmin1;

    $objAlumno1=new Alumno("Aurelia Rodriguez","aurelia22@gmail.com","20877781");
    $Usuarios[]=$objAlumno1;

    $objAlumno2 = new Alumno("Alejandra Noriega","alesitanorgmail.com","20874051");
    $Usuarios[]=$objAlumno2;

}catch(Exception $e){
echo "<div style='
        display: inline-block;
        background-color: #ffe6e6; 
        color: #0a0000; 
        border: 1px solid #f80505; 
        padding: 10px; 
        border-radius: 5px; 
        margin-bottom: 20px;
      '>";
    echo "<b>Error Controlado: </b>" . $e->getMessage();
echo "</div>";
}
//Tabla
echo "<h2> Lista de Usuarios </h2>";
echo "<table border='1' cellpadding='10' cellspacing='0'";
echo "<tr>";
echo "<th>Nombre</th>";
echo "<th>Correo</th>";
echo "<th>Rol</th>";
echo "<th>Matricula</th>";
echo "</tr>";

echo "<tbody>";
    foreach($Usuarios as $usuario){
        echo "<tr>";
        echo "<td>" . $usuario->getNombre() . "</td>";
        echo "<td>" . $usuario->getCorreo() . "</td>";
        echo "<td>" . $usuario->getRol() . "</td>";

        if ($usuario->getRol() == "Alumno") {
        echo "<td>" . $usuario->getMatricula() . "</td>";
    } else {
        echo "<td> N/A </td>";
    }

    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
?>