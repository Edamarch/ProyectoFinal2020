<?php include('../parasetamol.php') ?>
<?php 
include('../cnn.php');



    $codigo=$_REQUEST['codigo'];


 $consulta="DELETE FROM `categorias` WHERE `categorias`.`id_categoria` = $codigo ";
 $resultado=mysqli_query($conn,$consulta);

 
  


 ?>

 <META HTTP-EQUIV="REFRESH" CONTENT="0;concatprod.php?codigo=<?php echo $codigo ?>" >

 