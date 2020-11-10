<?php
 // session_start();

  //session_unset();

 // session_destroy();
session_start();
unset ($_SESSION['usuario']);
$_SESSION["conectado"]==false;
session_destroy(); 
header('Location: index.php');
  header('Location: /superexpress/index.php');
?>