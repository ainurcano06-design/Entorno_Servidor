<?php
$conexion = new mysqli("localhost", "root", "", "alumnado_db");

$id = $_GET['id'];

$conexion->query("DELETE FROM alumnos WHERE id=$id");

?>
