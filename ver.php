<?php
include 'config.php';
include 'conexion.php';
include 'alumno.php';
$sentencia=$pdo->prepare("SELECT * FROM alumnos");
$sentencia->execute();
$listaPersonas=$sentencia->fetchAll(PDO::FETCH_ASSOC);