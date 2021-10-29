<?php
include 'config.php';
include 'conexion.php';
include 'alumno.php';
$stmt = $pdo->prepare("UPDATE alumnos SET nombre=?, apellido=?, edad=?  WHERE email=?");
// Bind
$email= $_POST["email"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$edad = $_POST["edad"];


$stmt->bindParam(1,$nombre);
$stmt->bindParam(2,$apellido);
$stmt->bindParam(3,$edad);
$stmt->bindParam(4,$email);

// Excecute
$stmt->execute();
$alumno=new Alumno($email,$nombre,$apellido,$edad);
$stmt = $pdo->prepare("UPDATE alumnos SET nombre=:nombre, apellido=:apellido, edad=:edad WHERE email=:email" );
if($stmt->execute((array) $alumno)){
    echo 'bien';
    header("location:vista.php");
}else{ echo 'mal';}
