

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.js">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../jquery/jquery.js">
	<style type="text/css">


	body{
		background: url(imagenes/back.jpg) no-repeat fixed center center;
		background-size: cover;

	}
		
	#footer-zone { 
  		height: 50px; 
  		background:transparent; 
 		 width:100%; 
 		 position:fixed; 
 		 bottom:0; 
 		 left:20px; 
	}
		

	</style>

	<script>

		function validar(){
			var dui,pin;
			dui = document.getElementById("duI").value;
			pin = document.getElementById("piN").value;	


			if(dui === "" || pin === ""){
				alert("El campo DUI o PIN está vacio.");
				return false;
			}else if(dui.length>10 || dui.length<10 ){
				alert("Error.Ingrese nuevamente");
				return false;

			}else if(pin != "tse2019"){
				alert("PIN incorrecto");
				return false;
			}
		}

	</script>

	<title></title>

</head>
<body background="imagenes/back.jpg"">

	<div class="form-column col-md-12 col-sm-12 col-xs-12">
		<img src="imagenes/tse.png" align="rigth" width="200px" height="90px">
	</div>
		<div class="clearfix"></div>
	<center>
	<label >

		<br>

		<br>
		<div class="form-column col-md-12 col-sm-12 col-xs-12">
		<h1>INGRESE SUS CREDENCIALES</h1>
		</div>
		<div class="clearfix"></div>
		<hr>
		<br>
		<b>
		<form action="acceso.php" method="POST" id="form" class="form-register" onsubmit="return validar();">

			<label class="form-column col-md-12 col-sm-12 col-xs-12">INGRESE SU NÚMERO DE DUI</label>
			<div class="clearfix"></div>

			<div class="form-column col-md-6 col-sm-6 col-xs-6">
			<input type="text" id="duI" name="txtDUIvoto" placeholder="DUI" class="form-control"><br>
			</div>
			<div class="clearfix"></div>
			<label class="form-column col-md-12 col-sm-12 col-xs-12">INGRESE SU PIN</label>
			<div class="clearfix"></div>
			<div class="form-column col-md-6 col-sm-6 col-xs-6">
			<input type="password" id="piN" name="txtPin" placeholder="PIN" class="form-control">
			</div>
			<br>
			<div class="form-column col-md-4 col-sm-4 col-xs-4">
			<input type="submit" name="btnAcceder" class="btn btn-success" value="INGRESAR">
			</div>
			<b>
		</form>
				<?php

		
		if (isset($_REQUEST["Credenciales"])) {
			
			echo	"<script type=\"text/javascript\">
						alert('USTED NO POSEE CREDENCIALES');
					</script>";

		}
	
		?>
	</center>


	<footer id="footer-zone">
		
		<img src="imagenes/c.png" width="13px" height="13px"> 
		<font face="agency fb" color="white">El SALVADOR. Todos los Derechos Reservados</font>
	</footer>
</body>
</html>