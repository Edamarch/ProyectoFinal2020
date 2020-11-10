<?php include('../parasetamol.php') ?> 
<?php include('../encabezado2.php') ?>

<?php include('../cnn.php') ?>

<?php
include 'conn.php';
mostrarclientes($_POST['nit'],($_POST['nombre'],($_POST['apellido']);
function mostarclientes ($nit,$nombre,$apellido)
{
$sentencia="UPDATE clientes SET nit= '".$nit."', nombre= '".$nombre."', apellido= '".$apellido."', WHERE nit= '"$nit"'";
mysql_query($sentencia)or die(mysql_error());

}


?>
 