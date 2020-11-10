<?php include('parasetamol.php'); ?>
<?php include('encabezado.php'); ?>
<?php include('usermenu.php'); ?>
<!--Cuerpo de la pagina-->
	<!--<div id="general">-->

<style type="text/css">
	*{
	margin: 0;
	padding: 0;
	font-family: sans-serif;
	box-sizing: border-box;
}

form{
	margin: auto;
	width: 800%;
	max-width: 380px;
	background: #fff;
	padding: 30px;
	border: 0px solid rgba(0,0,0,0.2);
}
@media (max-width: 768px){
	form{ 
		width: 75%;
	}
}
@media (max-width: 480px){
	form{
		width: 95%;
	}
}
   
.btnAzul{	
	background:#05629b; /*#7f8c8d;*/
	color:#fff;
	display: inline-block;
	font-size: 1.25em;
	margin: 1px;
	padding: 10px;
	text-align: center;
	width: 200px;
	text-decoration: none;
	box-shadow: 0px 3px 0px #373c3c;
}
/*COLORES*/

.btnAzul.blue{

	background: #05629b; /* #3498db;*/
	box-shadow: 0px 3px 0px #266792;
}

/*TAMAÑOS*/
.btnAzul.medium{

}

/*EFECTOS*/
.btnAzul.radius{
	border-radius: 50px;

}

.btnAzul:hover{
	box-shadow: 0px 0px 0px;
	padding-top: -5px;
}

#contenedor{
	width: 500px;
	height: 410px;
	*/background:#d8d8d8;*/
	margin: 0.5em auto;
	margin-left: 3%;
	padding: 0.5em;
}
#section{
	height: 95%;
	width: 95%;
	background: #fff; /* #a4a4a4;*/
	border-radius: 1em;
	float: center;
	margin: 0.5em;
}
#aside{
	height: 95%;
	width: 20%;
	/*background: black;*/	
	border-radius: 1em;
	float: right;
	margin: 0.5em;
}
.articulo{
	width: 50%;
	height:30%;
	background: /*#424242;*/
	margin: 0.2em;
	margin-left: 225px;
	border-radius: 11em;

}

.articulo2{
	width: 50%;
	height:40%;
	background: /*#00aae4*/ /*#424242*/    /*340 500*/;
	margin: 1em;
	margin-left: 225px;
	border-radius: 1em;

}
</style>
<br>
<div>
	

</div>

<div id="contenedor">
	<div id="section">
		<?php include 'slide.php'; ?>

		
	</div>
	<div id="aside">
	<!--	<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FLaboratoriosPharmalat%2F&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden; border-radius: 20px;" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>-->
</div>
	

</div>






		<center>
		<a href="consulta/segmentousuario.php" class="btnAzul blue radius" >PRODUCTOS</a>
		<!--<a href="consulta/empresa.php" class="btnAzul blue radius">EVALUACIONES</a>-->			
		

		</center>

	<br>

	<!--</div>-->
<?php include('pie_pagina.php') ?>