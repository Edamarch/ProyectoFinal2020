<?php include('../parasetamol.php') ?>
<META HTTP-EQUIV="REFRESH" CONTENT="0;concatprod.php">
<?php ?>


<?php include('../cnn.php');?>
<div id="body_6">
	<table border="1" width="50%"  style="padding: 5px; margin: 0 auto; margin-top:  60px;">
	<tr>
		<td align="center">
			<font style="font-weight: bolder;">
	<?php 
	

    $name=$_POST['txtCategoria'];
    $precio=$_POST['txtPrecio'];
    $fecinc=$_POST['txtFechaIng'];
    $fecven=$_POST['txtFechaVen'];



	$res = $conn->query("SELECT * FROM categorias WHERE categorias.cnombre='$name'");
	if ($name=="") {
		echo "No se tiene ningun dato en la tabla";
	}elseif ($name) {
	
	if (mysqli_num_rows($res)>0){

	 	echo "EL DATO YA EXISTE CON EL NOMBRE:";
	 	echo "<br>";
	 	echo $name;
	 }
	 else{

	$consulta="insert into categorias(cnombre, cprecio, cfecha_ingreso, cfecha_vencimiento ) 
	values("."'".$name."'".",".$precio.","."'".$fecinc."'".","."'".$fecven."'".")";
	$resultado=mysqli_query($conn,$consulta);

	//echo $consulta;
	echo "DATO ALMACENADO CON EL NOMBRE DE ";
	echo "<br>";
	echo"<font style='font-weight: bolder; color: blue; '>". $name;
	echo "</font>";
	
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