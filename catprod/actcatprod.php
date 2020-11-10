<?php include('../parasetamol.php') ?>
<?php include('../encabezado2.php') ?>

<?php include('../cnn.php') ?>

 <?php 

$codigo=$_GET['codigo'];


$consulta="SELECT * FROM categorias WHERE categorias.id_categoria=$codigo";
$resultado=mysqli_query($conn, $consulta);
while ($columna=mysqli_fetch_array($resultado)) {

	$nombre=$columna['cnombre'];
	$precio=$columna['cprecio'];
	$fechain=$columna['cfecha_ingreso'];
	$fechaven=$columna['cfecha_vencimiento'];

}

  ?>

<div id="body3">

<center>	
<table border="1" width="50%" style="padding: 2px; margin: 0 auto; margin-top: 10px;" >
	<tr>
		<td >
			
			<table border="0" >
				<form  action="concatprodup.php" method="post">
				<tr>
					<td colspan="4" >
						<label class="encabezado1" >ACTUALIZACION DE CATEGORIA PRODUCTO</label>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center" class="texto1"><label >NOMBRE</label></td>
					<td colspan="2"><input type="text" name="txtCategoria" placeholder="NOMBRE CATEGORIA" class="caja1" autocomplete="off" value="<?php echo $nombre ?>"></td>
					<td><input type="text" name="txtID" style="display:none;"  value="<?php echo $codigo; ?>"> </td>
				</tr>
				<tr>
					<td colspan="2" align="center" class="texto1"><label >PRECIO</label></td>
					<td colspan="2"><input type="number" name="txtPrecio" placeholder="PRECIO" class="caja1" autocomplete="off" value="<?php echo $precio ?>"></td>
					
				</tr>
					<tr>
					<td colspan="2" align="center" class="texto1"><label >FECHA INGRESO</label></td>
					<td colspan="2"><input type="date" name="txtFechaIng" placeholder="PRECIO" class="caja1" autocomplete="off" min="2019-01-01" max="2040-01-01" required="txtFechaIng" value="<?php echo $fechain ?>"></td>
					
				</tr>
				</tr>
					<tr>
					<td colspan="2" align="center" class="texto1"><label >FECHA VENCIMIENTO</label></td>
					<td colspan="2"><input type="date" name="txtFechaVen" placeholder="PRECIO" class="caja1" autocomplete="off" min="2019-01-01" max="01-01-2040" required="txtFechaVen" value="<?php echo $fechaven ?>"></td>
					
				</tr>
		
				
				<tr>
					<td colspan="2" width="50%" align="center"><input type="submit" name="btnGuardar" value="GUARDAR" class="boton"></td>
					<td colspan="2" width="50%" align="center"><a href="concatprod.php"><input type="button" name="btnCancelar" value="CANCELAR" class="boton"></a></td>
				</tr>
				</form>
			</table>


		</td>
	</tr>

	
</table>


</center>


</div>
<br>
<br>
<br>
<br>
<br>


<?php include('../pie_pagina.php') ?>