<?php
	session_start();

	include "credenciales.php";
	

	if(isset($_SESSION["ciudadano"])){

			$dui=$_SESSION["ciudadano"]["num_dui"];
			$nivel=$_SESSION["ciudadano"]["nivel"];

			if(isset($_REQUEST["btnGana"])){

		$conexion=new mysqli(SERVIDOR,USUARIO,CONTRA,BD);

			$consulta="update DUI set nivel_acceso=2 where num_dui='".$dui."'";
			$global=$conexion->query($consulta);


			$consulta2="select a.id_jrv from Ciudadano as a 
						inner join JRV as b on b.id_jrv=a.id_jrv
						where num_dui='".$dui."'";
			$global2=$conexion->query($consulta2);

			$global2=$conexion->query($consulta2);
			$cantFilas = mysqli_num_rows($global2);

			if($cantFilas==1){
				while($fila=$global2->fetch_assoc()){
					$jrv=$fila["id_jrv"];
				}
			
			$consulta3="insert into Voto values('','".$jrv."',4)";
			$global3=$conexion->query($consulta3);

			session_destroy();
			$conexion->close();

			header("location:acceso.php");


			}


	}else if(isset($_REQUEST["btnFmln"])){

		$conexion=new mysqli(SERVIDOR,USUARIO,CONTRA,BD);

			$consulta="update DUI set nivel_acceso=2 where num_dui='".$dui."'";
			$global=$conexion->query($consulta);

			$consulta2="select a.id_jrv from Ciudadano as a 
						inner join JRV as b on b.id_jrv=a.id_jrv
						where num_dui='".$dui."'";
			$global2=$conexion->query($consulta2);

			$global2=$conexion->query($consulta2);
			$cantFilas = mysqli_num_rows($global2);

			if($cantFilas==1){
				while($fila=$global2->fetch_assoc()){
					$jrv=$fila["id_jrv"];
				}
			
			$consulta3="insert into Voto values('','".$jrv."',2)";	
			$global3=$conexion->query($consulta3);		

			session_destroy();
			$conexion->close();

			header("location:acceso.php");

			
			}
		

	}else if(isset($_REQUEST["btnArena"])){

		$conexion=new mysqli(SERVIDOR,USUARIO,CONTRA,BD);

			$consulta="update DUI set nivel_acceso=2 where num_dui='".$dui."'";
			$global=$conexion->query($consulta);

			$consulta2="select a.id_jrv from Ciudadano as a 
						inner join JRV as b on b.id_jrv=a.id_jrv
						where num_dui='".$dui."'";
			$global2=$conexion->query($consulta2);

			$global2=$conexion->query($consulta2);
			$cantFilas = mysqli_num_rows($global2);

			if($cantFilas==1){
				while($fila=$global2->fetch_assoc()){
					$jrv=$fila["id_jrv"];
				}

			$consulta3="insert into Voto values('','".$jrv."',3)";	
			$global3=$conexion->query($consulta3);

			session_destroy();
			$conexion->close();
			header("location:acceso.php");

			
			}


	}else if(isset($_REQUEST["btnNuevas"])){

		$conexion=new mysqli(SERVIDOR,USUARIO,CONTRA,BD);

			$consulta="update DUI set nivel_acceso=2 where num_dui='".$dui."'";
			$global=$conexion->query($consulta);

			$consulta2="select a.id_jrv from Ciudadano as a 
						inner join JRV as b on b.id_jrv=a.id_jrv
						where num_dui='".$dui."'";
			$global2=$conexion->query($consulta2);				

			$global2=$conexion->query($consulta2);
			$cantFilas = mysqli_num_rows($global2);

			if($cantFilas==1){
				while($fila=$global2->fetch_assoc()){
					$jrv=$fila["id_jrv"];
				}

			$consulta3="insert into Voto values('','".$jrv."',1)";		
			$global3=$conexion->query($consulta3);

			session_destroy();
			$conexion->close();
			header("location:acceso.php");

			
			}
			

	}else if(isset($_REQUEST["btnPdc"])){

		$conexion=new mysqli(SERVIDOR,USUARIO,CONTRA,BD);

			$consulta="update DUI set nivel_acceso=2 where num_dui='".$dui."'";
			$global=$conexion->query($consulta);

			$consulta2="select a.id_jrv from Ciudadano as a 
						inner join JRV as b on b.id_jrv=a.id_jrv
						where num_dui='".$dui."'";
			$global2=$conexion->query($consulta2);

			$global2=$conexion->query($consulta2);
			$cantFilas = mysqli_num_rows($global2);

			if($cantFilas==1){
				while($fila=$global2->fetch_assoc()){
					$jrv=$fila["id_jrv"];
				}
			
			$consulta3="insert into Voto values('','".$jrv."',5)";		
			$global3=$conexion->query($consulta3);

			session_destroy();
			$conexion->close();
			header("location:acceso.php");

			
			}


	}else if(isset($_REQUEST["btnPcn"])){

		$conexion=new mysqli(SERVIDOR,USUARIO,CONTRA,BD);

			$consulta="update DUI set nivel_acceso=2 where num_dui='".$dui."'";
			$global=$conexion->query($consulta);

			$consulta2="select a.id_jrv from Ciudadano as a 
						inner join JRV as b on b.id_jrv=a.id_jrv
						where num_dui='".$dui."'";
			$global2=$conexion->query($consulta2);

			$global2=$conexion->query($consulta2);
			$cantFilas = mysqli_num_rows($global2);

			if($cantFilas==1){
				while($fila=$global2->fetch_assoc()){
					$jrv=$fila["id_jrv"];
				}
			
			$consulta3="insert into Voto values('','".$jrv."',6)";
			$global3=$conexion->query($consulta3);

			session_destroy();
			$conexion->close();
			header("location:acceso.php");

			
			}


	}else if(isset($_REQUEST["btnNulo"])){

		$conexion=new mysqli(SERVIDOR,USUARIO,CONTRA,BD);

			$consulta="update DUI set nivel_acceso=2 where num_dui='".$dui."'";
			$global=$conexion->query($consulta);

			$consulta2="select a.id_jrv from Ciudadano as a 
						inner join JRV as b on b.id_jrv=a.id_jrv
						where num_dui='".$dui."'";
			$global2=$conexion->query($consulta2);

			$global2=$conexion->query($consulta2);
			$cantFilas = mysqli_num_rows($global2);

			if($cantFilas==1){
				while($fila=$global2->fetch_assoc()){
					$jrv=$fila["id_jrv"];
				}

			$consulta3="insert into Voto values('','".$jrv."',7)";
			$global3=$conexion->query($consulta3);

			session_destroy();
			$conexion->close();
			header("location:acceso.php");

		
			
			}

	}else if(isset($_REQUEST["btnCD"])){

		$conexion=new mysqli(SERVIDOR,USUARIO,CONTRA,BD);

			$consulta="update DUI set nivel_acceso=2 where num_dui='".$dui."'";
			$global=$conexion->query($consulta);

			$consulta2="select a.id_jrv from Ciudadano as a 
						inner join JRV as b on b.id_jrv=a.id_jrv
						where num_dui='".$dui."'";
			$global2=$conexion->query($consulta2);

			$global2=$conexion->query($consulta2);
			$cantFilas = mysqli_num_rows($global2);

			if($cantFilas==1){
				while($fila=$global2->fetch_assoc()){
					$jrv=$fila["id_jrv"];
				}

			$consulta3="insert into Voto values('','".$jrv."',8)";
			$global3=$conexion->query($consulta3);

			session_destroy();
			$conexion->close();
			header("location:acceso.php");

		
			
			}

	}


	
?>

<!DOCTYPE html>
<html lang="es">
<head >

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
	<meta charset="UTF-8">
	<
	<title>Votaciones_Inicio</title>
</head>
<body background="imagenes/back.jpg">
	<div class="container">
			<center>
				<label class="form-column col-md-12 col-sm-12 col-xs-12" style="margin-top: 30px;">
					<h2><small id="smalk">A CONTINUACION DE CLIC SOBRE EL BOTON DEL PARTIDO POR EL QUE VOTARA.</small></h2>
					<h3><small id="smalk">Ciudadano ha ingresado con el DUI #: <?php echo $_SESSION["ciudadano"]["num_dui"]; ?></small></h3>

			<?php
			$conexion=new mysqli(SERVIDOR,USUARIO,CONTRA,BD);
			$consulta = "select a.nombres,a.apellidos,a.num_dui FROM ciudadano as a inner join dui as b on a.num_dui = b.num_dui where b.num_dui ='".$_SESSION["ciudadano"]["num_dui"]."'";
			$res = $conexion->query($consulta);
			while($fila=$res->fetch_assoc()){
					$nombre=$fila["nombres"];
					$apellido=$fila["apellidos"];
			}
				echo "<h5>BIENVENID@:  ".utf8_encode($apellido)." ".utf8_encode($nombre)."</h5>"; 

			?>
				</label>
			</center>
			<div class="clearfix"></div>

			<form action="#" method="POST" class="row">
				<div class="form-column col-md-3 col-sm-3 col-xs-3">
					<img src="imagenes/ganaa.jpg" width="245px" height="145px">
					<a href="acceso.php"><input type="submit" name="btnGana" value="GANA" class="btn btn btn-sm btn-block" onclick="alert('Usted voto por GANA')" style='margin-top: 10px'></a>	
				</div>
				<div class="form-column col-md-3 col-sm-3 col-xs-3">
					<img src="imagenes/fmln.png" width="245px" height="145px"><p>
					<a href="acceso.php"><input type="submit" name="btnFmln" value="FMLN" class="btn btn btn-sm btn-block" onclick="alert('Usted voto por FMLN')" style='margin-top: 10px'></a>	
				</div>
				<div class="form-column col-md-3 col-sm-3 col-xs-3">
					<img src="imagenes/arenaa.jpg" width="245px" height="145px">
					<a href="acceso.php"><input type="submit" name="btnArena" value="ARENA" class="btn btn btn-sm btn-block" onclick="alert('Usted voto por ARENA')" style='margin-top: 10px'></a>
				</div>

				<div class="clearfix"></div>

				<div class="form-column col-md-3 col-sm-3 col-xs-3">
					<img src="imagenes/pcnn.jpg" width="245px" height="145px">
					<a href="acceso.php"><input type="submit" name="btnPcn" value="PCN" class="btn btn btn-sm btn-block" onclick="alert('Usted voto por PCN')" style='margin-top: 10px'></a>
				</div>	
				

				<div class="form-column col-md-3 col-sm-3 col-xs-3">
					<img src="imagenes/pdcc.jpg" width="245px" height="145px">
					<a href="acceso.php"><input type="submit" name="btnPdc" value="PDC" class="btn btn btn-sm btn-block" onclick="alert('Usted voto por PDC')" style='margin-top: 10px'></a>
				</div>	

				<div class="form-column col-md-3 col-sm-3 col-xs-3">
					<img src="imagenes/nuevas.jpg" width="245px" height="145px">
					<a href="acceso.php"><input type="submit" name="btnNuevas" value="NUVEAS IDEAS" class="btn btn btn-sm btn-block" onclick="alert('Usted voto por NUEVAS IDEAS')" style='margin-top: 10px'></a>
				</div>

				<div class="clearfix"></div>

				<div class="form-column col-md-3 col-sm-3 col-xs-3">
					<img src="imagenes/cd.jpg" width="245px" height="147px">													
					<a href="acceso.php"><input type="submit" name="btnCD" value="CD" class="btn btn btn-sm btn-block" onclick="alert('Usted voto por CD')" style='margin-top: 10px'></a>
				</div>

				<div class="form-column col-md-3 col-sm-3 col-xs-3">	
					<img src="imagenes/nulo.jpg" width="245px" height="145px">													
					<a href="acceso.php"><input type="submit" name="btnNulo" value="ANULAR MI VOTO" class="btn btn btn-sm btn-block" onclick="alert('Usted anulo su VOTO')" style='margin-top: 10px'></a>
			    </div>

			   

			</form>
			
	</div>
</body>
</html>


<?php

}else{
	
	header("location:login.php");

}


?>