<?php include('../parasetamol.php') ?>
<?php include('../encabezado2.php') ?>

<?php include('../cnn.php') ?>


<div id="body3">

<table border="1" width="50%%"  style="padding: 5px; margin: 0 auto; margin-top:  60px;">
	<tr>
		<td align="center">
			<font style="font-weight: bolder;">
	
				<table border="0">
				 <form action="fincategoria.php" method="post" > 

				  <tr>
				      
				        <br>
				        <td colspan="4"><center><input type="text" name="txtBuscar" placeholder="INGRESE UN DATO "  autocomplete="off" class="caja1 texto1"></center></td>
				        
						 </tr>
				 		
						    <td></td>
						    <td align="center" width="10%">
						      <input type="reset" value="LIMPIAR DATOS" class="boton">
						      
						    </td>
						    
						    <td align="center" width="20%">
						      
						      <input type="submit" name="btnEnviar" value="BUSCAR DATOS" class="boton">
						    </td>
						    <td align="center" width="10%">
						      <form>
						      <a href="concategoria.php"><input type="button" value="CANCELAR" class="boton"></a></form>
						      
						    </td>
 					 </tr>


				
				</table>
				<br>
				<br>
				<br>
				<br>
			</font>
 		</td>
	</tr>

 </table>
 </div>



<?php include('../pie_pagina.php') ?>