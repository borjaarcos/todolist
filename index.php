//index.php
?php
session_start();
//Conexion a BBDD
include 'init.php';

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="main.css">
    <title>Indice</title>
  <style>  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 200px;

    display: inline-block;
}

li a {
    display: inline-block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}
li {display: inline-block;
    text-align: center;
}
/* Change the link color on hover */
li a:hover {
    background-color: #555;
    color: white;
}
</style>
  </head>
  <body>
    <h1>todolist</h1>
    <ul>
      <li><a href="signup.php" >sign up</a></li>
      <li><a href= "signin.php">sign in</a></li>
    </ul>
  </body>
</html>
