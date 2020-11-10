<?php include('../parasetamol.php') ?>
<?php include('../encabezado2.php') ?>
<?php include('../cnn.php') ?>


 
<?php 

$codigo=$_GET['codigo'];
//Codigo de usuario

$consulta="SELECT * FROM tcategoria WHERE tcategoria.id_tipo=$codigo";
$resultado=mysqli_query($conn, $consulta);
while ($columna=mysqli_fetch_array($resultado)) {

	$nombre=$columna['nombre_tipo'];

}


 ?>
 
<div id="body3">

<center>	
<table border="1" width="50%" style="padding: 2px; margin: 0 auto; margin-top: 10px;" >
	<tr>
		<td >
			
			<table border="0" >
				<form  action="categoriaup.php" method="post">
				<tr>
					<td colspan="4" >
						<label class="encabezado1" >ACTUALIZAR CATEGORIA</label>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center" class="texto1"><label >CATEGORIA</label></td>
					<td colspan="2"><input type="text" name="txtNusuario" placeholder="NOMBRE USUARIO" class="caja1" autocomplete="off" value="<?php echo $nombre; ?>"></td>
					
					<td><input type="text" name="txtID" style="display:none;"  value="<?php echo $codigo; ?>"> </td>
					<td> </td>

				</tr>
				
				
				<tr>
					<td colspan="2" width="50%" align="center"><input type="submit" name="btnGuardar" value="GUARDAR" class="boton"></td>
					<td colspan="2" width="50%" align="center"><a href="concategoria.php"><input type="button" name="btnCancelar" value="CANCELAR" class="boton"></a></td>
				</tr>
				</form>
			</table>


		</td>
	</tr>

	
</table>


</center>


</div>




<?php include('../pie_pagina.php') ?>