<?php

session_start();

	include "credenciales.php";

//////////////////////////////////////////////////////////////////////////
//BOTON VOTAR-BOTON VOTAR-BOTON VOTAR-BOTON VOTAR-BOTON VOTAR-BOTON VOTAR
//////////////////////////////////////////////////////////////////////////
try{

if(isset($_REQUEST["btnIngresar"])){
				$ciudadano=$_REQUEST["txtDUI"];

				

			$conexion=new mysqli(SERVIDOR,USUARIO,CONTRA,BD);
			$consulta="select * from DUI where num_dui ='".$ciudadano."'";

			$global=$conexion->query($consulta);

			$cantFilas = mysqli_num_rows($global);

				if($cantFilas==1){
					while($fila=$global->fetch_assoc()){
						$dui=$fila["num_dui"];
						$nivel=$fila["nivel_acceso"];
					}

					 if($nivel==1){

					 	$_SESSION["ciudadano"]["num_dui"]=$dui;
						$_SESSION["ciudadano"]["nivel"]=$nivel;

						header("location:index.php");

						}else{

							header("location:login.php?cerrar");
						
						}

				}else{
			
						header("location:login.php");
				
				}
		
		
	}else{

				$conexion = new mysqli(SERVIDOR,USUARIO,CONTRA,BD);
		
				$sql="select nivel_acceso from DUI nivel_acceso=1";
				$resultado=$conexion->query($sql);
				$cant = mysqli_num_rows($resultado);
		
				if($cant==1){
				while($fila=$resultado->fetch_assoc()){
					
					$nivel=$fila["nivel_acceso"];
				}
					header("location:login.php");

			}else{

					header("location:login.php");
			}

	}

	}catch(Excepcion $ex){
			
		echo "<script type=\"text/javascript\">
					alert('ERROR. INGRESE DUI NUEVAMENTE');
			</script>";
		
		}	

///////////////////////////////////////////////////////////////////////////////
//VER GRAFICOS-VER GRAFICOS-VER GRAFICOS-VER GRAFICOS-VER GRAFICOS-VER GRAFICOS
///////////////////////////////////////////////////////////////////////////////	

	

		if(isset($_REQUEST["btnAcceder"])){

			$numdui=$_REQUEST["txtDUIvoto"];
	
				$conexion=new mysqli(SERVIDOR,USUARIO,CONTRA,BD);

				$consulta="select * from dui where num_dui='$numdui'";
				
				echo $consulta;
				$global=$conexion->query($consulta);

				$cantFilas = mysqli_num_rows($global);
				//echo $cantFilas;
					if($cantFilas==1){
					while($fila=$global->fetch_assoc()){

						$numDuis=$fila["num_dui"];
						$Pins=$fila["pin"];
						}
						
						$_SESSION["Graficos"]["num_dui"]=$numDuis;
						$_SESSION["Graficos"]["pin"]=$Pins;



						if($numDuis==$_SESSION["Graficos"]["num_dui"] && $Pins==$_SESSION["Graficos"]["pin"]){

						

								if($_SESSION["Graficos"]["pin"] == "tse2019"){
									header("location:votos.php");

								}else{
								session_destroy();
								
								header("location:loginvotos.php?Credenciales");	
								}
							 }else{
							session_destroy();
								
							}


					}else{
						session_destroy();
						header("location:loginvotos.php");
					}

					
		}


		 if(isset($_REQUEST["cerrar"])){
			session_destroy();
			header("location:loginvotos.php");
		}


	
?>