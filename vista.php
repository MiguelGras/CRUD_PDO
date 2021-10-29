<?php
include_once 'cabecera.html';
include 'ver.php';
echo "<h1>Administrar personas</h1>";
echo "<td><a type='button' class='btn btn-success'href='crear.php'>Crear</a></td>";
echo "<table class='table table-light'>";
    echo "<tr>";
    echo "<th>Nombre</th>";
    echo "<th>Apellido</th>";
    echo "<th>Edad</th>";
    echo "<th>Email</th>";
    echo "<th>Actualizar</th>";
    echo "<th>Borrar</th>";
    echo "</tr>";

    foreach ($listaPersonas as $alumno) {
        echo "<tr>";
        echo "<td>{$alumno['email']}</td>";
        echo "<td>{$alumno['nombre']}</td>";
        echo "<td>{$alumno['apellido']}</td>";  
        echo "<td>{$alumno['edad']}</td>";
        echo "<td><a type='button' class='btn btn-primary' href='actualizar.php?email={$alumno['email']}' onclick=\"return confirm('¿Estás seguro de actualizar?')\">Actualizar</a></td>";
        echo "<td><a type='button' class='btn btn-danger' href='eliminar.php?email={$alumno['email']}'  onclick=\"return confirm('¿Estás seguro de borrar?')\">Borrar</a></td>";
        echo '</tr>';
    }
echo "</table>";
echo "</html>";
