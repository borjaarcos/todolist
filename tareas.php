<?php
session_start();
  include 'init.php';

$tareassql="SELECT id, hecho, nombre FROM tareas WHERE usuario ='".$_SESSION['id_usuario']."'";
$resultado1=$conn->query($tareassql);
var_dump($resultado1);
var_dump($_SESSION['id']);

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <meta name="viewport" content="width = device-width, initial-scale=1.0">
     <link rel="stylesheet" href="main.css">
  </head>
  <body>
    <div class ="list">
      <h1>Tus tareas</h1>
      <a href="cerrar.php" class="boton-hecho">Cerrar sesion</a>
      <<?php if (!empty($resultado1)): ?>

      <ul class="tareas">
        <?php foreach($resultado1 as $row1): ?>
            <li>
              <?php if($row1['hecho'] == 0): ?>
                <span class="tarea"><?php echo($row1['nombre']);?></span>
                <a href="marcar.php?id=<?php echo $row1["id"];?>" class="boton-hecho">Marcar como hecha</a>
                <a href="borrar.php?id=<?php echo $row1["id"];?>" class="boton-hecho">Borrar</a>
              <?php endif; ?>
              <?php if($row1['hecho'] == 1): ?>
                <span class="tarea hecho"><?php echo($row1['nombre']); ?></span>
                <a href="borrar.php?id=<?php echo $row1["id"];?>" class="boton-hecho">Borrar</a>
              <?php endif; ?>
            </li>
          <?php endforeach; ?>

      </ul>
    <?php else:  ?>
      <p>No tienes tareas</p>

      <?php endif; ?>
      <form action="añadir.php" method="post">
          <input type="text" name="nombre" placeholder="Pon una nueva tarea" class"input" autocomplete="off" required>
          <input type="submit" value="Añadir" class="submit">
      </form>
  </body>
</html>
