<?php
  include('./librerias/conexion.php');

  $email = $_POST['email'];
  $password = $_POST['password'];
  $name = $_POST['name'];

  // Insertamos los valores en la tabla de datos
  $sql = "";
  $result = mysqli_query($link, $sql);

  if($result){
    header("Location:index.php?createuser=ok");
  }else{
    header("Location:index.php?createuser=ko");
  }
?>