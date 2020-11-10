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

 


<?php 
$consulta="SELECT usuarios.id_usuario, usuarios.usuario, usuarios.nombre, usuarios.apellido, usuarios.email, usuarios.estado, tipo.ntipo FROM usuarios, tipo
    WHERE usuarios.id_tipo=tipo.id_tipo  ";







						$resultado=mysqli_query($conn, $consulta);

                           echo "<br>";

                        //echo "<table border='2' >";

                        echo "<table border='2' cellspacing='0'  style='width:100%; border-collapse:collapse;' class='table-container table-rwd'  >";
                        echo "<tr class='GridViewScrollHeader TH' align='center'>";
                        echo "<th align='center'>No.</th>";
                        echo "<th>USUARIO</th>";
                        echo "<th>NOMBRE</th>";
                        echo "<th>APELLIDO</th>";
                        echo "<th>CORREO</th>";
                        echo "<th>ESTADO</th>";
                        echo "<th>TIPO</th>";
                        echo "<th align='center' colspan='2'>EDICION</th>";           
                        echo "</tr>";
						$Num=0;
						$Celda="<form><input type='radio'></input></form>"; 
						//$codigo=;
					while($columna=mysqli_fetch_array($resultado)){
					
						$Num=$Num+1;
		
							echo "<tr class='GridViewScrollItem'>";

                        echo "<td align='center'><font size='2'>".$Num."</font></td>
                        <td align='center'><font size='2'>".$columna['usuario']."</font></td>
                        <td align='center'><font size='2'>".$columna['nombre']."</font></td>
                        <td align='center'><font size='2'>".$columna['apellido']."</font></td>
                        <td align='center'><font size='2'>".$columna['email']."</font></td>
                        <td align='center'><font size='2'>".$columna['estado']."</font></td>
                        <td align='center'><font size='2'>".$columna['ntipo']."</font></td>
                        <td style='height: 25px;' align='center'><a href='actuser.php?codigo=".$columna['id_usuario']."'>
                        <input type='submit' name='btnupdate' value='EDITAR' class='botonE'></a></td>
                        <td style='height: 25px;' align='center'><a href='deluser.php?codigo=".$columna['id_usuario']."'>
                        <input type='submit' name='btnupdate' value='ELIMINAR' class='botonRed'></a></td>";
                        echo "</tr>";
                        }

                        echo"</table>";
                    mysqli_close( $conn );
 ?>
 