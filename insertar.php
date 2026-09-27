<?php
$conexion = new mysqli("localhost", "root", "", "alumnado_db");

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$fecha = $_POST['fecha_nacimiento'];
$curso = $_POST['curso'];
$email = $_POST['email'];
$password = $_POST['password'];

$consulta = $conexion->query("SELECT COUNT(*) AS total FROM alumnos WHERE curso='$curso'");
$total = $consulta->fetch_assoc()['total'];

if ($total >= 25) {
    echo "No se pueden matricular mas alumnos en $curso (maximo 25 alumnos).";
    exit;
}

$sql = "INSERT INTO alumnos (nombre, apellidos, fecha_nacimiento, curso, email, password)
        VALUES ('$nombre', '$apellidos', '$fecha', '$curso', '$email', '$password')";

$conexion->query($sql);

header("Location: inicio.html");
?>
