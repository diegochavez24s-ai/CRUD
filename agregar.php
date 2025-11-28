<?php
include "conexion.php";
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$cuatri = $_POST['cuatrimestre'];
pg_query($con, "INSERT INTO alumnos (nombre, apellido, cuatrimestre)
VALUES ('$nombre', '$apellido', '$cuatri')");
header("Location: index.php");
exit;
?>
