<?php
	session_start();

include "DAOFiltrar.php";

$dao = new DAOFiltrar();

$partidos=null;




if(isset($_SESSION["Graficos"])){


  if(isset($_REQUEST["btnFiltrarM"])){

    $campo=$_REQUEST["SlcMunicipio"];

    
   

   	$partidos=$dao->filtrarM($campo);


        if ($campo==1) {
            $lugar="<br><h2><p align='right'><font color='white'>Votos en Chalchuapa</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></h2>" ;
         }
        else if ($campo==2) {
            $lugar="<br><h2><p align='right'><font color='white'>Votos en Izalco</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></h2>" ;
         }
         else if ($campo==3) {
            $lugar="<br><h2><p align='right'><font color='white'>Votos en Mejicanos</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></h2>" ;
         }
         else if ($campo==4) {
            $lugar="<br><h2><p align='right'><font color='white'>Votos en Santa Tecla</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></h2>" ;
         }
         else if ($campo==5) {
            $lugar="<br><h2><p align='right'><font color='white'>Votos en Berlin</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></h2>" ;
         }
         else if ($campo==6) {
            $lugar="<br><h2><p align='right'><font color='white'>Votos en Lolotique</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></h2>" ;
         }

         

      

 	}

  if(isset($_REQUEST["btnFiltrarD"])){

      $campo=$_REQUEST["SlcDepartamento"];


   
      $partidos=$dao->filtrarD($campo);

            

        if ($campo==1) {
            $lugar="<br><h2><p align='right'><font color='white'>Votos en Santa Ana</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></h2>" ;
         }
        else if ($campo==2) {
            $lugar="<br><h2><p align='right'><font color='white'>Votos en Sonsonate</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></h2>" ;
         }
         else if ($campo==3) {
            $lugar="<br><h2><p align='right'><font color='white'>Votos en San Salvador</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></h2>" ;
         }
         else if ($campo==4) {
            $lugar="<br><h2><p align='right'><font color='white'>Votos en La Libertad</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></h2>" ;
         }
         else if ($campo==5) {
            $lugar="<br><h2><p align='right'><font color='white'>Votos en Usulutan</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></h2>" ;
         }
         else if ($campo==6) {
            $lugar="<br><h2><p align='right'><font color='white'>Votos en San Miguel</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></h2>" ;
         }
         

  } 


  if(isset($_REQUEST["btnGeneral"])){

    $conexion=new mysqli(SERVIDOR,USUARIO,CONTRA,BD);

                 $consulta="select count(a.id_partido) as 'votos', f.id_partido from Voto as a inner join Partidopol f on a.id_partido=f.id_partido Group by f.id_partido";
                $global=$conexion->query($consulta);
                $cantFilas=mysqli_num_rows($global);
                
                $i=1;
                    if($cantFilas=1){
                      while($fila=$global->fetch_assoc()){
                             $partidos[$i]=$fila['votos'];
                             $i++;
                            }
                    }
          
            $lugar="<br><h2><p align='right'><font color='white'>Grafica General</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></h2>" ;
         

    }


  

?>


<!DOCTYPE html>
<html>
<head>
	<title>Votos Especificos</title>
</head>
<meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.js">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../jquery/jquery.js">
    <link rel="stylesheet" href="../jquery/jquery-1.9.0.min.js">
    <link rel="stylesheet" href="../jquery/jquery-latest.js">
    

<body background="imagenes/back.jpg">



  <style type="text/css">

  body{
    background: url(imagenes/back.jpg) no-repeat fixed center center;
    background-size: cover;

  }
    

  </style>

   <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">


      // Load the Visualization API and the controls package.
      google.charts.load('current', {'packages':['corechart', 'controls']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawDashboard);

      // Callback that creates and populates a data table,
      // instantiates a dashboard, a range slider and a pie chart,
      // passes in the data and draws it.
      function drawDashboard() {

        // Create our data table.
        var data = google.visualization.arrayToDataTable([
          ['Name', 'FILTRAR PARTIDOS'],
      <?php

  echo    "['NUEVAS IDEAS' ,".$partidos[1]."],
           ['FMLN',".$partidos[2]."],
           ['GANA',".$partidos[3]."],
           ['ARENA',".$partidos[4]."],
           ['PDC',".$partidos[5]."],
           ['PCN',".$partidos[6]."],
           ['NULOS',".$partidos[7]."],
           ['CD',".$partidos[8]."]";
      ?>
        ]);

      // Create a dashboard.
        var dashboard = new google.visualization.Dashboard(
            document.getElementById('dashboard_div'));

        // Create a range slider, passing some options
        var donutRangeSlider = new google.visualization.ControlWrapper({
          'controlType': 'NumberRangeFilter',
          'containerId': 'filter_div',
          'options': {
            'filterColumnLabel': 'FILTRAR PARTIDOS'
          }
        });

        // Create a pie chart, passing some options
        var pieChart = new google.visualization.ChartWrapper({
          'chartType': 'PieChart',
        
          'containerId': 'chart_div',
          'options': {
            'width': 765,
            'height': 570,
            'pieSliceText': 'value',
            'legend': 'right',
            'backgroundColor': 'transparent',
              'is3D': 'true',
              'fontSize':15
              
          }

        });


   
        // Establish dependencies, declaring that 'filter' drives 'pieChart',
        // so that the pie chart will only display entries that are let through
        // given the chosen slider range.
        dashboard.bind(donutRangeSlider, pieChart);

        // Draw the dashboard.
        dashboard.draw(data);

      }
    </script>
   

<script type="text/javascript" src="../jquery/showhide.js"></script>


  </head>

  <body>
    

 
 <div class="row">

 	<div class=form-column" col-md-2 col-sm-2 col-xs-2">
 	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="imagenes/tse.png" align="rigth" width="100px" height="45px" style='margin-top: 30px'>&nbsp&nbsp&nbsp
 	</div>
  
  	  <div class=form-column" col-md-12 col-sm-12 col-xs-12" align="center">
    <?php 
    echo "<label style='margin-top: 10px'><h2><small id='smalk'>Ingreso con el DUI #: ".$_SESSION["Graficos"]["num_dui"]."</small></h2></label><br>";

    ?>

   
      
 <form action="#" method="POST" >
     	<label><h2><small id="smalk"><b>GRAFICOS A NIVEL DE:</b></small></h2></label><br>
	  	  
	  	<br>
      BUSCAR GRAFICO DE:
 
      <br>

 <section id="Munic">   
      
      <br>
      <div class="form-column col-md-12 col-sm-12 col-xs-12">
      <h4><font color="white">Municipios disponibles:</h4>
      </div>
      <div class="form-column col-md-12 col-sm-12 col-xs-12">
   	  <select name="SlcMunicipio" class="form-control" id="SlcMun">
        
   	   <option selected value="1">Chalchuapa</option>
   	   <option value="2">Izalco</option>
       <option value="3">Mejicanos</option>
       <option value="4">Santa Tecla</option>
       <option value="5">Berlin</option>
       <option value="6">Lolotique</option>
       </select>
      <p></p>
       <p></p>
       <input type="submit" name="btnFiltrarM" value="Filtrar Municipio" class="form-control" id="Muni" >
     </div>
 </section>
 
  <br>

<section id="Depart" >
       <div class="form-column col-md-12 col-sm-12 col-xs-12">
       <br>
       <h4><font color="white">Departamentos disponibles:</h4>
       <select name="SlcDepartamento" class="form-control" id="SlcDepa">
       
       <option selected value="1">Santa Ana</option>
       <option value="2">Sonsonate</option>
       <option value="3">San Salvador</option>
       <option value="4">La Libertad</option>
       <option value="5">Usulutan</option>
       <option value="6">San Miguel</option>
       </select>
       <p></p>
       <p></p>
       <input type="submit" name="btnFiltrarD" value="Filtrar Departamento" class="form-control" id="Depa" >
     </div>
       
  </section>    
      
      	<br>
  <div class="form-column col-md-12 col-sm-12 col-xs-12">
      <input type="submit" name="btnGeneral" value="GENERAL" class="form-control"></br>
  </div>
</form>
            
       <a href="acceso.php?cerrar=true">CERRAR SESION</a>
     </div> 

     <div class=form-column" col-md-2 col-sm-2 col-xs-2">
 		&nbsp&nbsp&nbsp&nbsp
 	</div>

    <!--Div that will hold the dashboard-->
    
    	   <?php
         if(isset($_REQUEST["btnFiltrarM"])){
           echo $lugar;
        }else if(isset($_REQUEST["btnFiltrarD"])){
           echo $lugar;
        }else if(isset($_REQUEST["btnGeneral"])){
           echo $lugar;
        }
         ?>
      
      <div class="form-column col-md-12 col-sm-12 col-xs-12">
    		<div id="dashboard_div" style="margin-top: 5px"></div>
      
      <!--Divs that will hold each control and chart-->
      
      		<div id="filter_div"  align="center"></div>
      
      
      		<div id="chart_div"  align="center"></div>
       </div>


  </body>
</html>

<?php

}else{

        header("location:loginvotos.php");
  }
  ?>
