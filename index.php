<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <form class="col-4">
  <div class="form-group">
    <label for="exampleFormControlInput1">Nombre</label>
    <input type="text" class="form-control" placeholder="Name">
  </div>
   <div class="form-group">
    <label for="exampleFormControlInput1">Apellidos de la persona</label>
    <input type="text" class="form-control" placeholder="Apellido">
  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Numero de la persona</label>
    <input type="text" class="form-control" placeholder="TELEFONO">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Correo</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    <div class="col-8 p-4">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">APELLIDOS</th>
      <th scope="col">NUMERO</th>
       <th scope="col">CORREO</th>
       <th scope="col">ACCION</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>3323299878</td>
      <td>@mdo</td>
        <td>
        <a href="editar.php?id=1">Editar</a> 
        <a href="eliminar.php?id=1">Eliminar</a> 
    </td>
</tr>
       </td>  

  </tbody>
</table>
  </div>
</body>
</html>

