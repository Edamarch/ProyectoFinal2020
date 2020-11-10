<?php include('../parasetamol.php') ?>
<?php
include '../cnn.php';
$eliminarclientes= $_GET['codigo'];
$consulta="DELETE FROM `clientes` WHERE `clientes`.`id_cliente` = $eliminarclientes";
 $resultado=mysqli_query($conn,$consulta);

?>
<META HTTP-EQUIV="REFRESH" CONTENT="0;consultaclientes.php?codigo=<?php echo $eliminarclientes ?>" >
