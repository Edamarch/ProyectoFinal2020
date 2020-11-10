<?php include('../parasetamol.php') ?>
<?php include('../cnn.php') ?>
 
<?php 
    $codigo=$_REQUEST['txtID'];

	$nombre=$_REQUEST['txtNusuario'];



 $consulta="UPDATE tcategoria SET nombre_tipo='$nombre' WHERE id_tipo=$codigo";

 $resultado=mysqli_query($conn,$consulta);



 ?>

 <META HTTP-EQUIV="REFRESH" CONTENT="0;concategoria.php?codigo=<?php echo $codigo ?>" >