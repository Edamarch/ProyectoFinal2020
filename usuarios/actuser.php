<?php include('../parasetamol.php') ?>
<?php include('../encabezado2.php') ?>
<?php include('../cnn.php') ?>


 
<?php 

$codigo=$_GET['codigo'];
//Codigo de usuario

$consulta="SELECT usuarios.id_usuario, usuarios.usuario, usuarios.nombre, usuarios.apellido, usuarios.email, usuarios.estado, tipo.ntipo, usuarios.id_tipo FROM usuarios, tipo WHERE usuarios.id_tipo=tipo.id_tipo AND usuarios.id_usuario=$codigo";
$resultado=mysqli_query($conn, $consulta);
while ($columna=mysqli_fetch_array($resultado)) {
	$user=$columna['usuario'];
	$nombre=$columna['nombre'];
	$apellido=$columna['apellido'];
	$email=$columna['email'];
	$estado=$columna['estado'];
	$tipo=$columna['id_tipo'];
	
	
}

if ($estado==1) {
	$estado1='ACTIVO';

}else{
	$estado1='INACTIVO';
}



$consulta2="SELECT * FROM tipo WHERE id_tipo=$tipo";
$resultado2=mysqli_query($conn, $consulta2);
while ($columna=mysqli_fetch_array($resultado2)) {
	$ntipo=$columna['ntipo'];
}

 ?>
 
<div id="body3">

<center>	
<table border="1" width="50%" style="padding: 2px; margin: 0 auto; margin-top: 10px;" >
	<tr>
		<td >
			
			<table border="0" >
				<form  action="userup.php" method="post">
				<tr>
					<td colspan="4" >
						<label class="encabezado1" >ACTUALIZAR USUARIO</label>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center" class="texto1"><label >USUARIO</label></td>
					<td colspan="2"><input type="text" name="txtNusuario" placeholder="NOMBRE USUARIO" class="caja1" autocomplete="off" value="<?php echo $user; ?>" disabled></td>
					
					
				</tr>
				<tr>
					<td colspan="2" align="center" class="texto1"><label >NOMBRE</label></td>
					<td colspan="2"><input type="text" name="txtNombre" placeholder="NOMBRE USUARIO" class="caja1" autocomplete="off" value="<?php echo $nombre; ?>"></td>
					<td rowspan="4"> <img src="../img/nuevousuario.png" class="imgmediana img"></td>
					
				</tr>
				<tr>
					<td colspan="2" align="center" class="texto1"><label >APELLIDO</label></td>
					<td colspan="2"><input type="text" name="txtApellido" placeholder="NOMBRE USUARIO" class="caja1" autocomplete="off" value="<?php echo $apellido; ?>"></td>
					
					
				</tr>
				<tr>
					<td><input type="text" name="txtID" style="display:none;"  value="<?php echo $codigo; ?>"> </td>
					<td> </td>

				</tr>
				<tr>
					<td colspan="2" align="center" class="texto1"><label>CORREO</label></td>
					<td colspan="2"><input type="email" name="txtEmail" placeholder="example@pharmalat.com.gt" class="caja1" autocomplete="off" value="<?php echo $email; ?>"></td>
				</tr>
				<tr>
					<td align="center" class="texto1"><label>ROL</label></td>
					<td >
						<select name="optValor1" style="border-radius: 5px; width: 180px; height: 30px; font-weight: bolder;" placeholder="ROL" >
						<option value="<?php echo $tipo; ?>"><?php echo $ntipo; ?></option>
						    <?php
						      	include('cnn.php');
						         $query = $conn -> query ("SELECT * FROM tipo");
						        while ($valores = mysqli_fetch_array($query)) {
						         echo '<option value="'.$valores[id_tipo].'" >'.$valores[ntipo].'</option>'; 
							          } mysqli_close($mysqli);
						    ?>
				    	</select>
					</td>
					
			
					<td align="center" class="texto1"><label>ESTADO</label></td>
					<td >
						<select name="optValor2" style="border-radius: 5px; width: 180px; height: 30px; font-weight: bolder;" placeholder="ROL" >
						<option value="<?php echo 	$estado; ?>"><?php echo $estado1; ?></option>
						  	<option value="1" >ACTIVO</option>
							<option value="2">INACTIVO</option>
				    	</select>
					</td>
					
				</tr>
				<tr>
					<td></td>
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


</div>




<?php include('../pie_pagina.php') ?>