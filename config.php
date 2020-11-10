<?php include('parasetamol.php') ?>

<?php include('encabezado.php'); ?>
<?php include('menu1.php') ?>

<style type="text/css">
	
	.boton1{
	border: 1px solid #2e518b; /*anchura, estilo y color borde*/
padding: 20px; /*espacio alrededor texto*/
background-color: #2e518b; /*color botón*/
color: #ffffff; /*color texto*/
text-decoration: none; /*decoración texto*/
text-transform: uppercase; /*capitalización texto*/
font-family: 'Helvetica', sans-serif; /*tipografía texto*/
font-weight: bolder;
border-radius: 50px; /*bordes redondos*/
width: 200px;
}
.boton1:hover{
	background-color: #434343; /*color botón*/
}
.imgdes:hover{
	/*filter: sepia(60%);*/
	filter: blur(5px);
}
</style>

<div id="body3">
	<table border="1" width="100%" style="margin:0 auto; margin-top: 10px;">
		<tr>
			<td align="center" width="80%">
				<form>
				<table border="0">
					<tr>
						<td width="30%" align="left">
							<a href="clientes/consultaclientes.php"><input type="button" name="btnUno" value="CLIENTES" class="boton1"></a>
						</td>
						<td rowspan="3"><img src="img/Config1.jpg"  style="width: 320px; height: 325px ; margin: 2px; " class="imgdes"></td>
						<td width="30%" align="right"><a href="categoria/concategoria.php"><input type="button" name="btnDos" value="CATEGORIAS" class="boton1"></a></td>
					</tr>
				
					<tr>
						<td align="left">
							<a href="catprod/concatprod.php"><input type="button" name="btntres" value="CATEGORIAS PRODUCTOS" class="boton1"></a>
							
						</td>
						<td align="right"><a href="usuarios/conusuario.php"><input type="button" name="btncuatro" value="USUARIO" class="boton1"></a></td>
					</tr>
					
					<tr>
						<td  align="left"><a href="creditos.php"><input type="button" name="btncuatro" value="CREDITOS " class="boton1"></a></td>
					
						<td  align="right"><a href="usuarios/passchange.php"><input type="button" name="btnseis" value="CAMBIO CONTRASEÑA" class="boton1"></a></td>
					</tr>
				</table>
				</form>
			</td>
		</tr>
	</table>
</div>

<?php include('pie_pagina.php'); ?>