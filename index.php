<?php
 include('./librerias/conexion.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h1 style="text-align: center;">Tabla de usuarios de nuestra aplicación</h1>

  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary center-block" data-toggle="modal" data-target="#exampleModal">
  Insertar nuevo usuario
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insertar nuevo usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="./create.php" method="POST">
          <div class="form-group">
            <label for="name">Nombre*:</label>
            <input type="text" class="form-control" placeholder="Introduce tu nombre" name="name">
          </div>
          <div class="form-group">
            <label for="email">Email*:</label>
            <input type="email" class="form-control"  placeholder="Introduce tu email" name="email">
          </div>
          <div class="form-group">
            <label for="phone">Contraseña*:</label>
            <input type="text" class="form-control" placeholder="Introduce tu contraseña" name="password">
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>



<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Correo</th>
      <th scope="col">Password</th>
      <th scope="col">Nombre</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php
      $sql= "SELECT * FROM users";
      $result = mysqli_query($link,$sql);

      if (!$result) {
        echo "La tabla está vacía";
      }
      else{
        while($row = mysqli_fetch_array($result)){
          echo ' <tr>
      <th scope="row">'.$row["id"].'</th>
      <td>'.$row["email"].'</td>
      <td>'.$row["password"].'</td>
      <td>'.$row["name"].'</td>
      <td><a href="./delete.php"><i class="fa fa-trash"></i></a></td>
    </tr>';
        }
      }
    ?>

    
  </tbody>
</table>
</div>

</body>
</html>
