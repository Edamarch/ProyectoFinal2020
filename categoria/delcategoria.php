<?php include('../parasetamol.php') ?>
<?php 
include('../cnn.php');



    $codigo=$_REQUEST['codigo'];


 $consulta="DELETE FROM `tcategoria` WHERE `tcategoria`.`id_tipo` = $codigo ";
 $resultado=mysqli_query($conn,$consulta);

  
  


 ?>

 <META HTTP-EQUIV="REFRESH" CONTENT="0;concategoria.php?codigo=<?php echo $codigo ?>" >

 