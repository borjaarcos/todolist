<?php
require_once 'tareas.php';
include 'init.php';
      $row  = $_GET['id'];


      $consultaHecho = "DELETE FROM tareas
                            WHERE id = '$row' AND usuario = '".$_SESSION['id_usuario']."'";

        $resultado3= $conn->query($consultaHecho);
        var_dump($conn->error_list);

var_dump($row);
header('Location: tareas.php');



 ?>
