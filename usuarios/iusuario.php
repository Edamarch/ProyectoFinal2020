<?php include('../parasetamol.php') ?>
<META HTTP-EQUIV="REFRESH" CONTENT="0;conusuario.php">
<?php ?>


<?php include('../cnn.php');?>
<div id="body_6">
	<table border="1" width="50%%"  style="padding: 5px; margin: 0 auto; margin-top:  60px;">
	<tr>
		<td align="center">
			<font style="font-weight: bolder;">
	<?php 
	
    $name=$_POST['txtUser'];
	$user1=$_POST['txtNusuario'];
	$apellido=$_POST['txtApellido'];
	$clave1=password_hash($_POST['txtPasswd'],PASSWORD_BCRYPT);
	$Correo=$_POST['txtEmail'];
	$tipo1=$_POST['optValor1'];
	$tipo2=$_POST['optValor2'];

	$res = $conn->query("SELECT * FROM usuarios WHERE usuario='$name'");
	if ($user1=="") {
		echo "No se tiene ningun dato en la tabla";
	}elseif ($user1) {
	
	if (mysqli_num_rows($res)>0){

	 	echo "EL DATO YA EXISTE CON EL NOMBRE:";
	 	echo "<br>";
	 	echo $user1;
	 }
	 else{

	$consulta="insert into usuarios(usuario,nombre,apellido,password,email,estado,id_tipo) values("."'".$name."'".","."'".$user1."'".","."'".$apellido."'".","."'".$clave1."'".","."'".$Correo."'".",".$tipo2.",".$tipo1.")";
	$resultado=mysqli_query($conn,$consulta);

	echo $consulta;
	echo "DATO ALMACENADO CON EL NOMBRE DE ";
	echo "<br>";
	echo"<font style='font-weight: bolder; color: blue; '>". $user1;
	echo "</font>";
	
	//echo "DATO ALMACENADO CON EL NOMBRE DE ".$user1;
	//echo $clave1;
	}
}
mysqli_close($conn);
 ?>
  </font>
 	</td>
	</tr>
 </table>
 </div>
 <?php include '../pie_pagina.php' ?>