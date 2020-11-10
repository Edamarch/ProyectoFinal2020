<?php include('../parasetamol.php') ?>
<?php include('../encabezado2.php') ?>

<?php include('../cnn.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Clientes</title>
	<meta charset="utf-8">
</head>
<body>
	<div id="body5_">
		
	<center>
		
	
 <form method="post" action="iclientes.php">

<table border="1" style="padding: 2px; margin: 0 auto; margin-top: 20%;">
<tr>
	<td>
		<table>
			
		

	<tr>
					<td colspan="4" >
						<label class="encabezado1" >NUEVO CLIENTE</label>
					</td>
				</tr>
	<tr>
		<td colspan="2">
			<label class="texto1">
				Nit
			</label>
		</td>
		<td colspan="2">
			<input type="text" name="txtNit" placeholder="Nit" autocomplete="off" class="caja1" maxlength="10">
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<label class="texto1">
				Nombre
			</label>
		</td>
		<td colspan="2">
			<input type="text" name="txtNombre" placeholder="Nombre" autocomplete="off" class="caja1">
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<label class="texto1">
				Apellido
			</label>
		</td>
		<td colspan="2">
			<input type="text" name="txtApellido" placeholder="Apellido" autocomplete="off" class="caja1">
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<input type="submit" name="btnEnviar" value="Guardar" class="boton">
		</td>
		<td colspan="2">

			<input type="button" name="btnCancelar" value="Cancelar" class="boton">
		</td>
	</tr>
	</table>
	</td>
	
		
	
</tr>

	
</table>

</form>
</center>

</div>
</body>
</html>
<?php include('../pie_pagina.php') ?>