<?php include('../parasetamol.php') ?>
<?php include('../cnn.php') ?>
 
<?php 
    $codigo=$_REQUEST['txtID'];
    //echo $codigo;
	$nombre=$_REQUEST['txtCategoria'];
	$precio=$_REQUEST['txtPrecio'];
	$fechain=$_REQUEST['txtFechaIng'];
	$fechven=$_REQUEST['txtFechaVen'];



 $consulta="UPDATE categorias SET cnombre='$nombre', cprecio=$precio, cfecha_ingreso='$fechain', cfecha_vencimiento='$fechven' WHERE id_categoria=$codigo";
//echo $consulta;
 $resultado=mysqli_query($conn,$consulta);



 ?>

 <META HTTP-EQUIV="REFRESH" CONTENT="0;concatprod.php?codigo=<?php echo $codigo ?>" >