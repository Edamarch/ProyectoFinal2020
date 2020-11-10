<?php include('../parasetamol.php') ?>
<?php include('../encabezado2.php') ?>

<?php include('../cnn.php') ?>


<div id="body3">

<table border="1" width="50%%"  style="padding: 5px; margin: 0 auto; margin-top:  60px;">
	<tr>
		<td align="center">
			<font style="font-weight: bolder;">
	
				<table border="0">
				 <form action="fincatprod.php" method="post" > 

				  <tr>
				       <td align="center" width="15%"> <select name="optValor3" style="border-radius: 5px; width: 180px; height: 30px;" placeholder="Seleccione una ">
				          <option value="0" >SELECCIONE UNA OPCION</option>
				          <option value="1" >NOMBRE</option>
				          <option value="2" >PRECIO</option>				 
				          <option value="5" >TODOS</option>
				        </select> 
				    	</td>
				        <br>
				        <td colspan="2"><input type="text" name="txtBuscar" placeholder="INGRESE UN DATO "  autocomplete="off" class="caja1 texto1"></td>
				        
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
						      <a href="concatprod.php"><input type="button" value="CANCELAR" class="boton"></a></form>
						      
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