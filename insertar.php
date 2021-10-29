<?php 
include 'config.php';
include 'conexion.php';
include 'alumno.php';

$email=$_POST["email"];
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$edad=$_POST["edad"];

$alumno=new Alumno($email,$nombre,$apellido,$edad);
$stmt = $pdo->prepare("INSERT INTO alumnos (email, nombre, apellido, edad) VALUES (:email, :nombre, :apellido, :edad)" );
try{
    if($stmt->execute((array) $alumno)){
        echo 'bien';
        header("location:vista.php");
    }else{ echo 'mal';}
}catch(PDOException $e){
    echo 'mal';
   echo  $e->getMessage();
}

