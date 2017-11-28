<?php
require_once 'tareas.php';
include 'init.php';
      $row  = $_GET['id'];


      $consultaHecho = "UPDATE tareas
                            SET hecho = 1
                            WHERE id = '$row' AND usuario = '".$_SESSION['id_usuario']."'";

        $resultado3= $conn->query($consultaHecho);

header('Location: tareas.php');

 ?>
