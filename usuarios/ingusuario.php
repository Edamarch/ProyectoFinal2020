<?php include('../parasetamol.php') ?>
<?php include('../encabezado2.php') ?>

<?php include('../cnn.php') ?>

 

<div id="body3">

<center>	
<table border="1" width="50%" style="padding: 2px; margin: 0 auto; margin-top: 10px;" >
	<tr>
		<td >
			
			<table border="0" >
				<form  action="iusuario.php" method="post">
				<tr>
					<td colspan="4" >
						<label class="encabezado1" >NUEVO USUARIO</label>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center" class="texto1"><label >USUARIO</label></td>
					<td colspan="2"><input type="text" name="txtUser" placeholder="USUARIO" class="caja1" autocomplete="off"></td>
					
				</tr>
				<tr>
					<td colspan="2" align="center" class="texto1"><label >NOMBRE</label></td>
					<td colspan="2"><input type="text" name="txtNusuario" placeholder="NOMBRE USUARIO" class="caja1" autocomplete="off"></td>
					<td rowspan="4"> <img src="../img/nuevousuario.png" class="imgmediana img"></td>
					
				</tr>
				<tr>
					<td colspan="2" align="center" class="texto1"><label >APELLIDO</label></td>
					<td colspan="2"><input type="text" name="txtApellido" placeholder="APELLIDO USUARIO" class="caja1" autocomplete="off"></td>
					
					
				</tr>
				<tr>
					<td   colspan="2" align="center" class="texto1" ><label>CONTRASEÑA</label></td>
					<td colspan="2"><input type="password" name="txtPasswd" placeholder="CONTRASEÑA" class="caja1" autocomplete="off" ></td>
					
				</tr>
				<tr>
					<td colspan="2" align="center" class="texto1"><label>CORREO</label></td>
					<td colspan="2"><input type="email" name="txtEmail" placeholder="example@pharmalat.com.gt" class="caja1" autocomplete="off"></td>
				</tr>
				<tr>
					<td align="center" class="texto1"><label>ROL</label></td>
					<td >
						
					
				<select name="optValor1" style="border-radius: 5px; width: 180px; height: 30px; font-weight: bolder;" placeholder="ROL" >
						<option >ROL</option>
						    <?php
						      	include('cnn.php');
						         $query = $conn -> query ("SELECT * FROM tipo");
						        while ($valores = mysqli_fetch_array($query)) {
						         echo '<option value="'.$valores[id_tipo].'" >'.$valores[ntipo].'</option>'; 
							          } mysqli_close($mysqli);
						    ?>
				    	</select>


				</select>
					</td>
					<td>ESTADO</td>
					<td>
						<select name="optValor2" style="border-radius: 5px; width: 180px; height: 30px; font-weight: bolder;" placeholder="ROL">
					<option>ESTADO</option>
					<option value="1" >ACTIVO</option>
					<option value="2">INACTIVO</option>
				
				</select>
						
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
					<td colspan="2" width="50%" align="center"><a href="conusuario.php"><input type="button" name="btnCancelar" value="CANCELAR" class="boton"></a></td>
				</tr>
				</form>
			</table>


		</td>
	</tr>

	
</table>


</center>

<br>
<br>
<br>
<br>
<br>
</div>



<?php include('../pie_pagina.php') ?>