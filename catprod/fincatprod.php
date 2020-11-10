<?php include('../parasetamol.php') ?>
<?php include('../encabezado2.php'); ?>


 

   
<div id="body_7">

<?php
                    include ('../cnn.php');
                    $buscar=$_POST['txtBuscar'];
                    $valoropt=$_POST['optValor3'];
                    
                    if ($buscar=="" or $valoropt=="0") {

                    echo "<H4><b>NECESITA INGRESAR UN DATO EN LA SELECCION MULTIPLE</b></H4>";
                    
                    
                    }elseif ($valoropt==1) {
?><?php include('valor1.php'); ?>

<?php                   

#########################################################################################################################################
                    }elseif ($valoropt==2) {


#########################################################################################################################################
 ?>
 <?php include('valor2.php'); ?>
 <?php 


                    }elseif ($valoropt==5) {


#########################################################################################################################################
 ?>
 <?php include('valor5.php'); ?>
 

<?php } ?>
<style type="text/css">
    .tablebotones {
    width: 141%;
    
}
</style>



<table width="100%" border="0" class="tablebotones">
    <tr align="center">
        <form>
            <td align="center" >
                        <a href="bcatprod.php"><input type="button" name="btnBuscar" value="NUEVA BUSQUEDA" class="botonA"></a>
                    </td>
        
        <td >
            <a href="concatprod.php"><input type="button" name="btnRetornar" value="CANCELAR" class="botonA"></a>
        </td>
        </form>
    </tr>
</table>

 </div>
 <br>
<br>
<br>
<?php include('../pie_pagina.php') ?>