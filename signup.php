<?php
  session_start();

  include 'init.php';

  if ($conn->connect_errno) {
      echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  }


  if(isset($_POST)&&
    !empty($_POST['email']) &&
    !empty($_POST['password'])){

    $email=htmlspecialchars($_POST['email']);
    $pass=md5(htmlspecialchars($_POST['password']));

    $cogerID="SELECT id FROM users WHERE  email='$email' AND password='$pass'";
    $resultado5=$conn->query($cogerID);

    $_SESSION['id_usuario']= $resultado5;
    $emailsql="SELECT email FROM users WHERE email='$email'";
    $passwordsql="SELECT password FROM users where password='$pass'";

    $resultado3=$conn->query($emailsql);
    $row1=$resultado3->fetch_assoc();

    $resultado4=$conn->query($passwordsql);
    $row2=$resultado4->fetch_assoc();

    if ($email == $row1['email'] && $pass == $row2['password']) {
      header('Location:tareas.php');
    }else {
      echo "no";
    }
}
   ?>

   <form action="<? $_SERVER['PHP_SELF']; ?>" method="post">
     <p>Email:<input type="email" name="email"></p>
     <p>Password:<input type="password" name="contrasenya"></p>
     <p><input type="submit" value="Sign in" name="Sign in"></p>
   </form>
