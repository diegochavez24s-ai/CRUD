<?php
include "conexion.php";
if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}
$id=$_GET['id'];
// OBTENER INFORMACIÓN DEL ALUMNO
$consulta = pg_query($con, "SELECT * FROM alumnos WHERE id = $id");
$alumno = pg_fetch_assoc($consulta);
if ($_POST) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cuatri = $_POST['cuatrimestre'];
    pg_query($con, "UPDATE alumnos SET 
        nombre='$nombre', 
        apellido='$apellido',
        cuatrimestre='$cuatri'
        WHERE id=$id");

    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Editar Alumno</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
<div class="container">
  <h1>Editar Alumno</h1>
  <form method="POST" class="form">
    <input type="text" name="nombre" value="<?= $alumno['nombre'] ?>" required>
    <input type="text" name="apellido" value="<?= $alumno['apellido'] ?>" required>
    <input type="text" name="cuatrimestre" value="<?= $alumno['cuatrimestre'] ?>" required>

    <button type="submit" class="btn">Guardar cambios</button>
    <a href="index.php" class="btn2">Cancelar</a>
  </form>
</div>
</body>
</html>
