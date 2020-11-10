<?php 
include('../cnn.php');



    $codigo=$_REQUEST['codigo'];


 $consulta="DELETE FROM `usuarios` WHERE `usuarios`.`id_usuario` = $codigo ";
 $resultado=mysqli_query($conn,$consulta);

  
  
 ?>

 <META HTTP-EQUIV="REFRESH" CONTENT="0;conusuario.php?codigo=<?php echo $codigo ?>" >

 