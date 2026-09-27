<?php
$conexion = new mysqli("localhost", "root", "", "alumnado_db");
$id = $_GET['id'];

$consulta = $conexion->query("SELECT * FROM alumnos WHERE id=$id");
$alumno = $consulta->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar alumno</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Editar alumno</h2>

<form action="actualizar.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $alumno['id']; ?>">

    <label>Nombre:</label>
    <input type="text" name="nombre" value="<?php echo $alumno['nombre']; ?>" required>

    <label>Apellidos:</label>
    <input type="text" name="apellidos" value="<?php echo $alumno['apellidos']; ?>" required>

    <label>Fecha de nacimiento:</label>
    <input type="date" name="fecha_nacimiento" value="<?php echo $alumno['fecha_nacimiento']; ?>" required>

    <label>Curso:</label>
    <select name="curso" required>
        <option value="1ESO" <?php if($alumno['curso']=="1ESO") echo "selected"; ?>>1º ESO</option>
        <option value="2ESO" <?php if($alumno['curso']=="2ESO") echo "selected"; ?>>2º ESO</option>
        <option value="3ESO" <?php if($alumno['curso']=="3ESO") echo "selected"; ?>>3º ESO</option>
        <option value="4ESO" <?php if($alumno['curso']=="4ESO") echo "selected"; ?>>4º ESO</option>
    </select>

    <label>Email:</label>
    <input type="email" name="email" value="<?php echo $alumno['email']; ?>" required>

    <label>Contraseña:</label>
    <input type="password" name="password" value="<?php echo $alumno['password']; ?>" required>

    <button type="submit">Actualizar</button>
</form>

<br>
<a href="inicio.html">Volver</a>

</body>
</html>
