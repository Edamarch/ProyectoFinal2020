<?php include('../parasetamol.php') ?>
<?php 
include('../cnn.php');

$nit=$_POST['txtNit'];
$nombre=$_POST['txtNombre'];
$apellido=$_POST['txtApellido'];
$estado='ACTIVO';
$res= $conn->query("SELECT * FROM clientes WHERE nit=$nit");
if (mysqli_num_rows($res)>0) {
	echo "El nit ya existe";
}
else{
	$consulta="insert into clientes(nit,nombre,apellido,cestado) value("."'".$nit."'".","."'".$nombre."'".","."'".$apellido."'".","."'".$estado."'".")";
	$resultado=mysqli_query($conn,$consulta);
	echo "dato almacenado";

}

mysqli_close($conn);





 ?>
  <?php header('Status: 301 Moved Permanently', false, 301); header('Location: consultaclientes.php');
exit();
?>
