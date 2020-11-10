<?php include('../parasetamol.php') ?>
<?php include('../encabezado2.php'); ?>

<META HTTP-EQUIV="REFRESH" CONTENT="2;consultaclientes.php">

<div id="body4">

	<table border="1" width="50%%"  style="padding: 5px; margin: 0 auto; margin-top:  60px;">
	<tr>
		<td align="center">
			<font style="font-weight: bolder;">


<?php 
$codigo1=$_POST['txtID'];
$nit=$_POST['txtNit'];
$nombre=$_POST['txtNombre'];
//$nombreU=$_POST['txtNombreU'];
//$Pass=$_POST['txtPasswd'];
$apellido=$_POST['txtApellido'];
$tipo1=$_POST['optValor'];




//echo $codigo1; 
//echo $nombre;
//echo $correo;
//echo $tipo1;
//echo $npais;
//echo "<br>";


//echo $nombreU;
//echo $npais;
?>
<!--#######################################################################################################################################################-->



<!--#######################################################################################################################################################  , usuario='$nombreU'-->

<?php

include ('../cnn.php');


	
$consulta="UPDATE clientes SET nit='$nit', apellido='$apellido', cestado='$tipo1' WHERE id_cliente= $codigo1";
$resultado=mysqli_query($conn,$consulta);

//echo $consulta;
//echo $codigo1;
echo "DATO ACTUALIZADO CON EL NOMBRE DE ";
	echo "<br>";
	echo"<font style='font-weight: bolder; color: blue; '>". $nombre;
	echo "</font>";

mysqli_close($conn);
 ?>


 </font>
 	</td>
	</tr>
 </table>
 </div>

<?php include('../pie_pagina.php') ?>