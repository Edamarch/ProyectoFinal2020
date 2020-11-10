<?php include('../parasetamol.php') ?>
<?php include('../encabezado2.php'); ?>


<META HTTP-EQUIV="REFRESH" CONTENT="2;../config.php">
<div id="body4">

	<table border="1" width="50%%"  style="padding: 5px; margin: 0 auto; margin-top:  60px;">
	<tr>
		<td align="center">
			<font style="font-weight: bolder;">



<table border="0">
        <tr>
          <td>
            <?php 
             
              $usuario=$_POST['txtNtitular'];
              $clave1=$_POST['contra1'];
              $clave2=$_POST['contra2'];

             ?>
             <?php 
             include ('../cnn.php');
              $res = $conn->query("SELECT * FROM usuarios WHERE id_usuario='$usuario'");
              if ($usuario=="") {
                echo "No se tiene ningun dato en la tabla";
              }elseif ($usuario) {
              
                    if (mysqli_num_rows($res)>0){
                        $consulta2="SELECT * FROM usuarios WHERE id_usuario='$usuario'";
                        $resultado2=mysqli_query($conn,$consulta2);
                        while ($columna=mysqli_fetch_array($resultado2)) {
                          $user1=$columna['id_usuario'];
                          echo $user1;
                        }


                      if ($clave1==$clave2) {
                        
                      $clavepass= password_hash($clave1, PASSWORD_BCRYPT);
                      $consulta="UPDATE usuarios SET password ='$clavepass' WHERE id_usuario=$user1";
                     $resultado=mysqli_query($conn,$consulta);
                    // echo $consulta;
                    echo "DATO ACTUALIZADO CON EL NOMBRE DE ";
					echo "<br>";
					echo"<font style='font-weight: bolder; color: blue; '>". $usuario;
					echo "</font>";
                      
                      //echo "<a href='../config.php'><input type='button' name='btnCancelar' value='ACEPTAR' class='btnEnviar'></a>";
              		 }else{
               		 echo "CONTRASEÑAS NO COINCIDEN ";
					 echo "<br>";
					 echo"<font style='font-weight: bolder; color: blue; '>". $usuario;
					 echo "</font>";
            
             }
        	 }
        	}

             ?>

          </td>
        
        </tr>
      </table>


			</font>
 	</td>
	</tr>
 </table>
 </div>

<?php include('../pie_pagina.php') ?>