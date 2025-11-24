<?php include "conexion.php"; ?>
<?php
$consulta = $conexion->query("SELECT * FROM alumnos ORDER BY id ASC");
$alumnos = $consulta->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>CRUD Alumnos</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
<div class="container">
  <h1>CRUD de Alumnos</h1>
  <form action="agregar.php" method="POST" class="form">
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="text" name="apellido" placeholder="Apellido" required>
    <input type="text" name="cuatrimestre" placeholder="Cuatrimestre" required>
    <button type="submit" class="btn">Agregar</button>
  </form>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Cuatrimestre</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($alumnos as $a): ?>
      <tr>
        <td><?= $a['id'] ?></td>
        <td><?= $a['nombre'] ?></td>
        <td><?= $a['apellido'] ?></td>
        <td><?= $a['cuatrimestre'] ?></td>
        <td>
          <a href="editar.php?id=<?= $a['id'] ?>" class="btn2">Editar</a>
          <a href="eliminar.php?id=<?= $a['id'] ?>" class="btn2 eliminar">Eliminar</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
</body>
</html>
