<?php
$conexion = new mysqli("localhost", "root", "", "alumnado_db");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$fecha = $_POST['fecha_nacimiento'];
$curso = $_POST['curso'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "UPDATE alumnos SET 
        nombre='$nombre',
        apellidos='$apellidos',
        fecha_nacimiento='$fecha',
        curso='$curso',
        email='$email',
        password='$password'
        WHERE id=$id";

$conexion->query($sql);

header("Location: inicio.html");
?>
