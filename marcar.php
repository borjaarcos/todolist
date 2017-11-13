<?php
require_once 'tareas.php';
      $row  = $_GET['id'];


      $consultaHecho = "UPDATE tareas
                            SET hecho = 1
                            WHERE id = '$row' AND usuario = 1";

        $resultado3= $conn->query($consultaHecho);
        
header('Location: tareas.php');

 ?>
