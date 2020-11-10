
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SUPEREXPRESS</title>
    <meta name="description" content="Your about page description"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;amp;lang=en" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" rel="stylesheet">
    <link href="styles/main.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/logoph.ico" >
  </head>
  <body id="top">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header mdl-layout__header--waterfall site-header">
        <div class="mdl-layout__header-row site-logo-row"><span class="mdl-layout__title">
            <div class="site-logo"></div></div> 

      </header>
      <div class="mdl-layout__drawer mdl-layout--small-screen-only">
        <nav class="mdl-navigation mdl-typography--body-1-force-preferred-font"><a class="mdl-navigation__link" href="#"></a><a class="mdl-navigation__link" href="#"></a><a class="mdl-navigation__link" href="#"></a><a class="mdl-navigation__link" href="#"></a>
        </nav>
      </div>
      <main class="mdl-layout__content">
        <div class="site-content">
          <div class="mdl-grid site-max-width">

            <!--Este es el controlador de la hoja central-->
            <div class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--4dp page-content">
              
              <div class="mdl-card__media">
              </div>
              <div class="mdl-grid site-copy"> 
                <div class="mdl-cell mdl-cell--12-col"><h3 class="mdl-cell mdl-cell--12-col mdl-typography--headline" align="center">USUARIO INVALIDO</h3>
<div class="mdl-cell mdl-cell--12-col mdl-card__supporting-text no-padding ">

<style type="text/css">
  .btnEnviar{
    background-color:   #3966db  ; /* Green */
  border: none;
  color: white;
  padding: 12px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 4px 20px;
  cursor: pointer;
   width:200px;
    height:40px;
}

.btnEnviar {border-radius: 12px;}
.btnEnviar:hover { background-color:  #95979b;}
  
</style>


<form  action="index.php" method="post">
        <tr align="left">
          
          <td colspan="2" align="center"><input type="submit" name="btnEnviar" value="RETORNAR" class="btnEnviar"></td>
        </tr>
        
      </form>


<?php 

$usuario = $_POST['txtusuario'];
$pass = $_POST['txtpasswd'];

if(empty($usuario) || empty($pass)){
header("Location: superexpress/index.php");
exit();
}

include('cnn.php');

 $consulta="SELECT * FROM usuarios WHERE usuario='$usuario'";
 $resultado=mysqli_query($conn,$consulta);
 while ($columna=mysqli_fetch_array($resultado)) {
  $registro1=$columna['id_usuario'];
  $contra=$columna['password'];
  $utipo=$columna['id_tipo'];
 
//$result = mysqli_query("SELECT * FROM usuarios WHERE usuario='$usuario'");
 
//if($row = mysqli_fetch_array($result)){
if(password_verify($pass,$contra)){
session_start();
$_SESSION['usuarios'] = $usuario;

$_SESSION['conectado']=true;
$_SESSION['inicio'] = time();
$_SESSION['expira'] = $_SESSION['inicio'] + (230 * 60);

/*  while ($valores = mysqli_fetch_array($query)) {
                  $registro1=$valores['id_usuario'];*/

  if ($utipo==1) {


    header("Location: /superexpress/config.php");
   
        $van1=date('Y-m-d');
        $van2=date('g:ia');

        
      




   } elseif ($utipo==2) {
    header("Location: /superexpress/home.php");
   }elseif ($utipo==3) {
    header("Location: /superexpress/login3.php");
    exit();
   }

else{
header("Location: /superexpress/login4.php");
exit();
}
}
}
 ?>

</div>
</div>
              </div>
            </div>
          </div>
        </div>


        <footer class="mdl-mini-footer">
          <div class="footer-container">
            <div class="mdl-logo"> </div>
            <ul class="mdl-mini-footer__link-list">
              <li><a href="http://www.pharmalat.net" target="_blank"></a></li>
            </ul>
          </div>
        </footer>

      
    </div>
  </body>
</html>
