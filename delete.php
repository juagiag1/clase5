<?php
  include('./librerias/conexion.php');

  // Borramos los valores en la tabla de datos
  $sql = "";
  $result = mysqli_query($link, $sql);

  if($result){
    header("Location:index.php?deleteuser=ok");
  }else{
    header("Location:index.php?deleteuser=ko");
  }
?>