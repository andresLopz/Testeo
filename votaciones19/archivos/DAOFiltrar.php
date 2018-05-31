   <?php

include "metodos.php";
include "credenciales.php";




class DAOFiltrar implements Metodos{

 private $conexion;



     public function DAOFiltrar(){

      $this->conexion= new mysqli(SERVIDOR,USUARIO,CONTRA,BD);
      if($this->conexion->connect_errno){
        echo "Error al conectar a la base de datos: " .
        $this->conexion->error;
        exit;
         }
      }

    public function filtrarM($campo){

     $consulta="select count(a.id_partido) as 'votos', f.id_partido from Voto as a 
                    inner join Partidopol f on a.id_partido=f.id_partido
                    inner join JRV as b on a.id_jrv=b.id_jrv 
                    inner join Centro_Votacion as c on b.id_cv=c.id_cv
                    inner join Municipio as d on c.id_municipio=d.id_municipio

                    where d.id_municipio=$campo Group by f.id_partido";
                    
                    $global=$this->conexion->query($consulta);

                    $cantFilas=mysqli_num_rows($global);
                    
                     $i=1;
                        if($cantFilas=1){
                             while($fila=$global->fetch_assoc()){
                            $partidos[$i]=$fila['votos'];
                             $i++;
                             
                            }
                   }
                  


         
        return $partidos;      
      
    }


    public function filtrarD($campo){

     $consulta="select count(a.id_partido) as 'votos', f.id_partido from Voto as a 
                    inner join Partidopol f on a.id_partido=f.id_partido
                    inner join JRV as b on a.id_jrv=b.id_jrv 
                    inner join Centro_Votacion as c on b.id_cv=c.id_cv
                    inner join Municipio as d on c.id_municipio=d.id_municipio
                    inner join Departamento as e on d.id_depart=e.id_depart
                    where e.id_depart=$campo Group by f.id_partido";
                    
                    $global=$this->conexion->query($consulta);

                    $cantFilas=mysqli_num_rows($global);
                    
                     $i=1;
                        if($cantFilas=1){
                             while($fila=$global->fetch_assoc()){
                            $partidos[$i]=$fila['votos'];
                             $i++;
                             
                            }

                   }
                  

            
      return $partidos;  
    }

}

    ?>

