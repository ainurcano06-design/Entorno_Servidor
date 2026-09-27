<?php
$conexion = new mysqli("localhost", "root", "", "alumnado_db");

$consulta = $conexion->query("SELECT * FROM alumnos ORDER BY apellidos, curso");

echo "<table>
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Curso</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>";

while ($fila = $consulta->fetch_assoc()) {
    echo "<tr>
            <td>{$fila['nombre']}</td>
            <td>{$fila['apellidos']}</td>
            <td>{$fila['curso']}</td>
            <td>{$fila['email']}</td>
            <td>
                <a href='editar.php?id={$fila['id']}'>Editar</a> |
                <a href='eliminar.php?id={$fila['id']}'>Eliminar</a>
            </td>
          </tr>";
}

echo "</table>";
?>
