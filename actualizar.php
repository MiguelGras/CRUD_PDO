<?php
    require_once 'cabecera.html';
    include 'config.php';
    include 'conexion.php';
    include 'alumno.php';
    $email=$_GET["email"];
    $sentencia=$pdo->prepare("SELECT * FROM alumnos WHERE email=$email");
    $sentencia->execute();
    $listaPersonas=$sentencia->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
</head>
<body>
<center><h1>Actualizar persona</h1></center>
<div class="form-group align-items-center">
<form action="modificar.php" method="post">
        <label for="Nombre">Name</label>
        <input type="text" class="form-control" name="nombre" id="nombre">
        <label for="Apellido">Apellido</label>
        <input type="text" class="form-control" name="apellido" id="apellido">
        <label for="edad">Edad</label>
        <input type="number" class="form-control" name="edad" id="edad">
        <br>
        <input type="submit" class="btn btn-success" value="Actualizar">
    </form>
</div>
</body>
</html>