<?php include('../parasetamol.php') ?>
<?php include('../encabezado2.php') ?>
<?php include('../cnn.php') ?>

<script type="text/javascript" src="../js/gridviewscroll.js"></script>
    <script type="text/javascript">
        var gridViewScroll = null;
        window.onload = function () {
            var options = new GridViewScrollOptions();
            options.elementID = "gvMain";
            options.width = 1150;
            options.height = 300;
            options.freezeColumn = true;
            options.freezeFooter = false;
            options.freezeColumnCssClass = "GridViewScrollItemFreeze";
            options.freezeFooterCssClass = "GridViewScrollFooterFreeze";
            options.freezeColumnCount = 0;

            gridViewScroll = new GridViewScroll(options);
            gridViewScroll.enhance();

            options.elementID = "gvMain2";
            var gridViewScroll2 = new GridViewScroll(options);
            gridViewScroll2.enhance();

            options.elementID = "gvMain3";
            options.width = 1100;
            var gridViewScroll3 = new GridViewScroll(options);
            gridViewScroll3.enhance();

            options.elementID = "gvMain4";
            var gridViewScroll4 = new GridViewScroll(options);
            gridViewScroll4.enhance();
        }
        function enhance() {
            gridViewScroll.enhance();
        }
        function undo() {
            gridViewScroll.undo();
        }
    </script>
 
<style type="text/css">
    

    .botonRed{
    border: 1px solid #05629b;/*#2e518b; /*anchura, estilo y color borde*/
padding: 1px; /*espacio alrededor texto*/
background-color: #FF4500;/*#2e518b; /*color botón*/
color: #ffffff; /*color texto*/
text-decoration: none; /*decoración texto*/
text-transform: uppercase; /*capitalización texto*/
font-family: 'Helvetica', sans-serif; /*tipografía texto*/
font-weight: bolder;
font-size: 12px;
border-radius: 50px; /*bordes redondos*/
width: 100px;

}
.botonRed:hover{
    background-color: #434343; /*color botón*/
}


    
</style>

<div id="body3">


<?php 
$buscar=$_POST['txtBuscar'];

$consulta="SELECT * FROM tcategoria WHERE tcategoria.nombre_tipo LIKE '%".$buscar."%' ";


						$resultado=mysqli_query($conn, $consulta);

                           echo "<br>";

                        //echo "<table border='2' >";

                        echo "<table border='2' cellspacing='0'  style='width:100%; border-collapse:collapse;' class='table-container table-rwd'  >";
                        echo "<tr class='GridViewScrollHeader TH' align='center'>";
                        echo "<th align='center'>No.</th>";                        
                        echo "<th>NOMBRE</th>";                    
                        echo "<th align='center' colspan='2'>EDICION</th>";           
                        echo "</tr>";
						$Num=0;
						$Celda="<form><input type='radio'></input></form>";
						//$codigo=;
					while($columna=mysqli_fetch_array($resultado)){
					
						$Num=$Num+1;
		
							echo "<tr class='GridViewScrollItem'>";

                        echo "<td align='center'><font size='2'>".$Num."</font></td>                       
                        <td align='center'><font size='2'>".$columna['nombre_tipo']."</font></td>                       
                        <td style='height: 25px;' align='center'><a href='actcategoria.php?codigo=".$columna['id_tipo']."'>
                        <input type='submit' name='btnupdate' value='EDITAR' class='botonE'></a></td>
                        <td style='height: 25px;' align='center'><a href='delcategoria.php?codigo=".$columna['id_tipo']."'>
                        <input type='submit' name='btnupdate' value='ELIMINAR' class='botonRed'></a></td>";
                        echo "</tr>";
                        }

                        echo"</table>";
                    mysqli_close( $conn );
 ?>

 <table width="100%" border="0" class="tablebotones">
    <tr align="center">
        <form>
            <td align="center" >
                        <a href="bcategoria.php"><input type="button" name="btnBuscar" value="NUEVA BUSQUEDA" class="botonA"></a>
                    </td>
        
        <td >
            <a href="concategoria.php"><input type="button" name="btnRetornar" value="CANCELAR" class="botonA"></a>
        </td>
        </form>
    </tr>
</table>
 </div>
  <br>
<br>
<br>
<?php include('../pie_pagina.php') ?>