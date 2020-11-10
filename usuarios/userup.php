<?php include('../parasetamol.php') ?>
<?php include('../cnn.php') ?>
 
<?php 
    $codigo=$_REQUEST['txtID'];
    //codigo de id multimedia
    
 //  $usuario=$_REQUEST['txtNusuario'];
  // 	$user=$columna['txtNusuario'];
	$nombre=$_REQUEST['txtNombre'];
	$apellido=$_REQUEST['txtApellido'];
	$email=$_REQUEST['txtEmail'];
	$estado=$_REQUEST['optValor1'];
	$tipo=$_REQUEST['optValor2'];







//echo $usuario;
/*/echo $email;<META HTTP-EQUIV="REFRESH" CONTENT="20;../consulta/cusuario.php?codigo=<?php echo $producto ?>">*/
//echo $rol;

 $consulta="UPDATE usuarios SET  nombre='$nombre',apellido='$apellido', email='$email', estado=$estado,id_tipo=$tipo WHERE id_usuario=$codigo";
 $resultado=mysqli_query($conn,$consulta);
//echo $consulta;
  
  
//$consulta="UPDATE usuarios SET nusuario=$usuario, correo=$email, id_tipo=$rol WHERE id_usuario=$codigo ";
//$resultado=mysqli_query($conn,$consulta);


 ?>

 <META HTTP-EQUIV="REFRESH" CONTENT="0;conusuario.php?codigo=<?php echo $codigo ?>" >