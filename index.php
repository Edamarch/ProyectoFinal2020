
<?php include('encabezado.php') ?>
<br>
<br>
<br>
<br>
<br>
<style>
	*{
	margin: 0;
	padding: 0;
	font-family: sans-serif;
	box-sizing: border-box;
}


form{
	margin: auto;
	width: 60%;
	max-width: 380px;
	background: #F3F3F3;
	padding: 30px;
	border: 1px solid rgba(0,0,0,0.2);
}
h2{
	text-align: center;
	margin-bottom: 20px;
	color: rgba(0,0,0,0.5);
}
input{
	display:block;
	padding: 10px;
	width: 100%;
	margin:30px 0;
	font-size: 20px; 
}
input[type="submit"]{
	background: linear-gradient(#FFDA63, #FFB940);
	border:0;
	color:brown;
	opacity: 0.8;
	cursor: pointer;
	border-radius: 20px;
	margin-bottom: 0;
}
input[type="submit"]:hover{
	opacity: 1;

}
input[type="submit"]:active{
	transform: scale(0.95);
}
input[type="text"]{
	border-radius: 20px;

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
</style>

			
			
		<form action="validar.php" method="post">
		<h2>INICIO DE SESION</h2>
		<input type="text" name="txtusuario" placeholder="Usuario" autocomplete="off" required="txtNombre">
		<input type="password" name="txtpasswd" placeholder="Contraseña" autocomplete="off" style="border-radius: 20px;" required="txtpasswd">
		<input type="submit" name="btnEnviar" value="Enviar">
		</form>
<br>

<br>
<br>
<br>
<br>
<br>


<?php include('pie_pagina.php') ?>