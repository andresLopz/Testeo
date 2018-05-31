
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
		
	</style>

	<script>
		function validar(){
			var dui,caracteres;
			dui = document.getElementById("duI").value;


			if(dui === ""){
				alert("El campo DUI está vacio.");
				return false;
			
			}else if(dui.length>10 || dui.length<10 ){
				alert("Error.Ingrese nuevamente");
				return false;

		}
	}
	</script>

	<title></title>
	
</head>
<body background="imagenes/back.jpg">


	<div class="form-column col-md-12 col-sm-12 col-xs-12">
		<img src="imagenes/tse.png" align="rigth" width="200px" height="90px">
	</div>
	<div class="clearfix"></div>
	<center>
		<br>
		<br>
		<br>
		<div class="form-column col-md-12 col-sm-12 col-xs-12">
		<h1>BIENVENIDO AL SISTEMA DE VOTACIONES PRESIDENCIALES 2019</h1><br>
		</div>
		<div class="clearfix"></div>
		<div class="form-column col-md-12 col-sm-12 col-xs-12">
		<h2><small id="smalk">Te invitamos a ser parte de nuestra democracia</small></h2>
		</div>
		<div class="clearfix"></div>
				<form action="acceso.php" method="POST" id="form" class="form-register" onsubmit="return validar();">
			
					<label class="form-column col-md-4 col-sm-4 col-xs-4"><b>INGRESE SU NÚMERO DE DUI</b></label>
					
					<div class="form-column col-md-2 col-sm-2 col-xs-2">
					<input type="text" id="duI" name="txtDUI" class="form-control" >
					</div>
					<br>
					<div class="form-column col-md-4 col-sm-4 col-xs-4">
					<input type="submit" name="btnIngresar" class="btn btn-success" value="INGRESAR">
					</div>
				<?php




				?>
		
			 
		     	</form>


		<?php

		
		if (isset($_REQUEST["cerrar"])) {
			
			echo	"<script type=\"text/javascript\">
						alert('USTED YA VOTO');
					</script>";

		}
	
		?>


	</center>

</body>

	<style type="text/css">
		
#footer-zone { 
  height: 50px; 
  background:transparent; 
  width:100%; 
  position:fixed; 
  bottom:0; 
  left:20px; 
}
	</style>

	<footer id="footer-zone">
		
		<img src="imagenes/c.png" width="13px" height="13px"> 
		<font face="agency fb" color="white">El SALVADOR. Todos los Derechos Reservados</font>
	</footer>

</html>

<?php



?>
