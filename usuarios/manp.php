<?php include('../parasetamol.php') ?>
<?php include('../encabezado2.php'); ?>



<div id="body5">

	<table border="1" width="50%%"  style="padding: 5px; margin: 0 auto; margin-top:  60px;">
	<tr>
		<td align="center">
			<font style="font-weight: bolder;">
				
				<table border="0">
					<tr>
						<form action="man1.php" method="post">
						<td colspan="2">
							<label class="encabezado1">CAMBIO DE CONTRASEÑA</label>
						</td>
					</tr>
					<tr>
						<td width="50%" style="height: 50px; font-weight: bold;" align="center" >
							<label>USUARIO</label>
						</td>
						<td><input type="text" name="txtNtitular" placeholder="USUARIO" class="caja1 texto1" autocomplete="off"></td>
					</tr>
					<tr>
						<td width="50%" style="height: 50px; font-weight: bold;" align="center" >
							<label>CONTRASEÑA</label>
						</td>
						<td><input type="password" name="contra1" placeholder="CONTRASEÑA" class="caja1 texto1" autocomplete="off"></td>
					</tr>
					<tr>
						<td width="50%" style="height: 50px; font-weight: bold;" align="center" >
							<label>CONFIRMAR</label>
						</td>
						<td><input type="password" name="contra2" placeholder="CONFIRMAR CONTRASEÑA" class="caja1 texto1" autocomplete="off"></td>
					</tr>
					<tr>
						<td align="center" style="height: 80px;"><input type="submit" name="btnGuardar" value="GUARDAR" class="boton"></td>
						<td align="center"><a href="../config.php"><input type="button" name="btnCancelar" value="CANCELAR" class="boton"></a></td>
					</form>
					</tr>
				</table>

			</font>
 		</td>
	</tr>
 </table>
 </div>

<?php include('../pie_pagina.php') ?>