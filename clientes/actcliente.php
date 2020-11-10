<?php include('../parasetamol.php') ?>
<?php include('../encabezado2.php') ?>

<?php include('../cnn.php') ?>


	<!--#######################################################################################################################################################################-->
	<?php 

$codigo=$_GET['codigo'];

include ('../cnn.php');
 $consulta="SELECT * FROM clientes WHERE clientes.id_cliente='".$codigo."'";                         
            $resultado=mysqli_query($conn, $consulta);
          while($columna=mysqli_fetch_array($resultado)){
            $cod1=$codigo;
            $npais1=$columna['id_cliente'];
            $nit=$columna['nit'];
            $nombre=$columna['nombre'];
            $apellido=$columna['apellido'];
            $tipo=$columna['cestado'];

              

          }
 ?>
<!--#######################################################################################################################################################################-->

		
	<center>
		
	
 <form method="post" action="clienteup.php">

<table border="1" style="padding: 2px; margin: 0 auto; margin-top: 9%;">
<tr>
	<td>
		<table>
			
		

	<tr>
					<td colspan="4" >
						<label class="encabezado1" >ACTUALIZACION DE CLIENTE</label>
					</td>
				</tr>
	<tr>
		<td colspan="2">
			<label class="texto1">
				Nit
			</label>
		</td>
		<td colspan="2">
			<input type="text" name="txtNit" placeholder="Nit" autocomplete="off" class="caja1" maxlength="10" value="<?php echo $nit ?>">
		</td>
		<td><input type="text" name="txtID" style="display:none;"  value="<?php echo $codigo; ?>"> </td>
	</tr>
	<tr>
		<td colspan="2">
			<label class="texto1">
				Nombre
			</label>
		</td>
		<td colspan="2">
			<input type="text" name="txtNombre" placeholder="Nombre" autocomplete="off" class="caja1" value="<?php echo $nombre ?>">
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<label class="texto1">
				Apellido
			</label>
		</td>
		<td colspan="2">
			<input type="text" name="txtApellido" placeholder="Apellido" autocomplete="off" class="caja1" value="<?php echo $apellido ?>">
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<label class="texto1">
				Estado
			</label>
		</td>
		<td colspan="2">
			<select name="optValor" style="border-radius: 5px; width: 180px; height: 30px;" placeholder="ROL">
                  <option value="<?php echo $tipo; ?>"><?php echo $tipo; ?></option>
                  <option value="ACTIVO">ACTIVO</option>
                  <option value="INACTIVO">INACTIVO</option>
                </select>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<input type="submit" name="btnEnviar" value="Guardar" class="boton">
		</td>
		<td colspan="2">

			<a href="consultaclientes.php"><input type="button" value="CANCELAR" class="boton"></a>
		</td>
	</tr>
	</table>
	</td>
	
		
	
</tr>

	
</table>

</form>
</center>

</div>

<?php include('../pie_pagina.php') ?>