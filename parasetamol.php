<?php
session_start();
if (isset($_SESSION['conectado']) && $_SESSION['conectado'] == true) {
//echo "Bienvenido! " . $_SESSION['usuario'];
	//echo "Pais".$_SESSION['pais'];
} else {
header("Location: /superexpress/index.php");
exit;
}
$now = time();
if($now > $_SESSION['expira']) {
session_destroy();
echo "Su sesion a terminado">

exit;
   }
?>
