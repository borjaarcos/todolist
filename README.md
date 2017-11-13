# todolist
//index.php


<?php
session_start();
//Conexion a BBDD
$conn = new mysqli("localhost", "borja", "1234a", "todolist");

if ($conn->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";

$_SESSION['id_usuario'] = 1;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="main.css">
    <title>Indice</title>
  </head>
  <body>
    <h1>todolist</h1>
    <ul>
      <li><a href="signup.php" class="boton-hecho">sign up</a></li>
      <li><a href="signin.php" class="boton-hecho">sign in</a></li>
    </ul>
  </body>
</html>
