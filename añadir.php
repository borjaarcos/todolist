<?php
session_start();

include 'init.php';


if($_POST && !empty($_POST['nombre'])) {
  $name =htmlspecialchars($_POST['nombre']);}

  if(!empty($name)){
      $tareanuevasql="INSERT INTO tareas VALUES('', '".$name."', '".$_SESSION['id_usuario']."', '2000-10-10', '')";
    $resultado2= $conn->query($tareanuevasql);
}

header('Location: tareas.php');
?>
