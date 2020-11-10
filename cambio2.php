<?php include('../parasetamol.php') ?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MARCAS PHARMALAT</title>
    <meta >
    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;amp;lang=en" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" rel="stylesheet">
   <link href="../styles/main.css" rel="stylesheet"><!--Cambiar esto a ../styles/main.css-->
<link rel="shortcut icon" href="../img/logoph.ico" >
 

<script>
function comprobarClave(){
    clave1 = document.f1.clave1.value
    clave2 = document.f1.clave2.value
   // clave3= document.body.innerHTML="<a href=''"https://www.hostinger.com.ar/tutoriales/insertar-javascript-en-html/

    if (clave1 == clave2)
alert("Las dos claves son Iguales")
    else
       alert("Las dos claves son distintas...\nRealizaríamos las acciones del caso negativo")
}
</script> 



  </head>
  <body >
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header mdl-layout__header--waterfall site-header">
        <div class="mdl-layout__header-row site-logo-row"><span class="mdl-layout__title">
            <div class="site-logo"></div><span class="site-description"></span></span>
        </div>
        <div class="mdl-layout__header-row site-navigation-row mdl-layout--large-screen-only">
          <nav class="mdl-navigation mdl-typography--body-1-force-preferred-font">
            <a class="mdl-navigation__link" href="../consultas/fecven.php">MARCAS</a>
            <a class="mdl-navigation__link" href="../config.php">CONFIGURACION</a>
            <a class="mdl-navigation__link" href="../logout.php">CERRAR SESION</a>
   
          </nav>
    </div>
    </header>
      <div class="site-content">
      <div class="mdl-layout__drawer mdl-layout--small-screen-only">
        <nav class="mdl-navigation mdl-typography--body-1-force-preferred-font"><a class="mdl-navigation__link" href="index.html">Home</a><a class="mdl-navigation__link" href="portfolio.html">Portfolio</a><a class="mdl-navigation__link" href="about.html">About</a><a class="mdl-navigation__link" href="contact.html">Contact</a>
        </nav>
      </div>
<!--#######################################################################################################################################################################-->

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

<!--#######################################################################################################################################################################-->

<table border="1" class="tablas" width="700">
  <tr>
    <td>
      <form action="contraU.php" method="post" >
      <table align="center" width="90%" border="0">
        <th colspan="2"><h3><b>ACTUALIZAR CONTRASEÑA</b></h3></th>
        <tr>
          <td width="40%">
            <label class="etiquetas">USUARIO:</label>
          </td>
          <td>
            <input type="text" name="txtUsuario" placeholder="INGRESE EL USUARIO" class="text1" required="txtUsuario" autocomplete="off">
          </td>
        </tr>
        <tr>
          <td>
            <label class="etiquetas">NUEVA CONTRASEÑA:</label>
          </td>
          <td>
            <input type="password" name="clave1" placeholder="INGRESE SU CONTRASEÑA" required="clave1" autocomplete="off" class="text1">
          </td>
        </tr>
        <tr>
          <td>
            <label class="etiquetas">CONFIRMAR CONTRASEÑA:</label>
          </td>
          <td>
            <input type="password" name="clave2" placeholder="CONFIRMAR CONTRASEÑA" autocomplete="off" class="text1" required="clave2">
          </td>
        </tr>
        <tr>
          <td>
            <input type="submit" name="btnActualizar" class="btnEnviar" value="ACTUALIZAR" >
          </td>
          <td>
            <a href="../config.php"><input type="button" name="btnCancelar" value="CANCELAR" class="btnEnviar"></a>
          </td>
        </tr>
        </form>
      </table>    
    </td>
  </tr>
</table>




<!--#######################################################################################################################################################################-->
          </div>
            </div>
          </div>
        </div>
         <footer class="mdl-mini-footer">
          <div class="footer-container">
            <div class="mdl-logo"> </div>
            <ul class="mdl-mini-footer__link-list">
              <li><a href="http://www.pharmalat.net" class="btn btn-default btn-lg active" role="button" target="_blank">PHARMALAT GUATEMALA</a></li>
            </ul>
          </div>
        </footer>

      
    </div>
  </body>
</html>