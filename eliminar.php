<?php 
include 'config.php';
include 'conexion.php';
include 'alumno.php';
$stmt = $pdo->prepare("DELETE FROM alumnos WHERE email=?");
// Bind
$email = $_GET["email"];
try {
    $stmt->bindParam(1, $email);
    $stmt->execute();
    header('location: vista.php');
} catch (\Throwable $th) {
    echo "No se ha podido eliminar el elemento deseado";
}
