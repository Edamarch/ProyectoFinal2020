<?php include('../parasetamol.php') ?>

<style >
  .tituloHead{


    text-shadow: -5px -5px 5px #aaa;
  }
  .etiquetas{
    font-family: "Times New Roman", Times, Serif;
    font-size: 16px;
  }
  .text1{
    border: 2px solid #05629b;
  border-radius: 5px;
  padding: 6px;
  width: 90%;
  }
.btnEnviar{
    background-color:  #05629b  ; /* Green */
  border: none;
  color: white;
  padding: 2px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  margin: 0px 0px;
  cursor: pointer;
  font-weight: bold;
   width:300px;
    height:40px;
}

.btnEnviar {border-radius: 12px;}
.btnEnviar:hover { background-color:  #95979b;}
.tablas{
  border-radius: 10px;
  border-color: #05629b;
}

</style>



<!--####################################################################################################################################################################-->

<table>
  <tr>
    <td>
      <table border="0">
        <tr>
          <td>
            <?php 
             
              $usuario=$_POST['txtNtitular'];
              $clave1=$_POST['contra1'];
              $clave2=$_POST['contra2'];

              echo $usuario;
              echo $clave1;
              echo $clave2;
             ?>
             <?php 
             include ('../cnn.php');
              $res = $conn->query("SELECT * FROM usuarios WHERE usuario='$usuario'");
              if ($usuario=="") {
                echo "No se tiene ningun dato en la tabla";
              }elseif ($usuario) {
              
                    if (mysqli_num_rows($res)>0){
                        $consulta2="SELECT * FROM usuarios WHERE usuario='$usuario'";
                        $resultado2=mysqli_query($conn,$consulta2);
                        while ($columna=mysqli_fetch_array($resultado2)) {
                          $user1=$columna['id_usuario'];
                          echo $user1;
                        }

                    if ($clave1==$clave2) {
                        
                      $clavepass= password_hash($clave1, PASSWORD_BCRYPT);
                      echo $clavepass;
                      $consulta="UPDATE usuarios SET password='$clavepass' WHERE usuarios.id_usuario=$user1";
                     $resultado=mysqli_query($conn,$consulta);
                    // echo $consulta;
                     echo "<h3><b><center>";
                     echo "Actualizado";
                     echo "</center></b></h3>";
                      echo "<br/>";
                     echo "<center><a href='conusuario.php'><input type='button' name='btnCancelar' value='ACEPTAR' class='btnEnviar'></a></center>";
                      }
                      //echo "<a href='../config.php'><input type='button' name='btnCancelar' value='ACEPTAR' class='btnEnviar'></a>";
               }else{
                echo "<h3><b><center>";
                echo "Contraseña o Usuario con error";
                 echo "</center></b></h3>";
                echo "<br/>";
               echo "<center><a href='passchange.php'><input type='button' name='btnCancelar' value='CANCELAR' class='btnEnviar'></a></center>";}
             }

             ?>

          </td>
        
        </tr>
      </table>
    </td>
  </tr>
</table>
<!--###################################################################################################################################################################-->


          </div>
            </div>
          </div>
        </div>

  

          
    </div>
  </body>
</html>