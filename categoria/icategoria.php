<?php include('../parasetamol.php') ?>
<?php include('../encabezado2.php') ?>

<?php include('../cnn.php') ?>

 

<div id="body3">

<center>	
<table border="1" width="50%" style="padding: 2px; margin: 0 auto; margin-top: 10px;" >
	<tr>
		<td >
			
			<table border="0" >
				<form  action="ingcategoria.php" method="post">
				<tr>
					<td colspan="4" >
						<label class="encabezado1" >NUEVA CATEGORIA</label>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center" class="texto1"><label >TIPO CATEGORIA</label></td>
					<td colspan="2"><input type="text" name="txtUser" placeholder="CATEGORIA" class="caja1" autocomplete="off"></td>
					
				</tr>
				
					</td>
				</tr>
				<tr>
					<td>
						


					</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
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
<br>
<br>
<br>
<br>
<br>


<?php include('../pie_pagina.php') ?>