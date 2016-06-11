<?php
$n=0;
$result = mysql_query("select * from ".$_SESSION['tabla']." where id_pregunta='".$_SESSION['respuesta']."' ;", $conectador);

$numero_campos=mysql_num_fields($result);

if($fila[0]==2){ //SI ES DOCENTE
		if ($row = mysql_fetch_array($result)){ 
		  echo "<table border = '1' WIDTH='70%'> \n"; 
		  echo "<tr><td>RESPUESTA</td><td>USUARIO</td><td>NOTA</td></tr>";
		   //echo "<tr><td>Codigo</td><td>Nombre</td><td>Fecha</td><td>Hora</td><td>Ganador</td></tr> \n"; 
		   do { 
		   	   echo "<tr>";
		   	while($n<$numero_campos){
		   		if($n==0||$n==2){}else{
		      echo "<td>".$row[$n]."</td>";
		  }
		      $n++;
		      }
		      $n=0;
		      if($fila[0]==1){}else{ //SI ES ESTUDIANTE
		      echo "<td><a href='modificar.php?v=".$_SESSION['tabla']."&"."pk=".$row[0].
		      "'>Modificar</a></td><td><a href='../modelo/eliminar.php?v=".$_SESSION['tabla']."&"."pk=".$row[0].
		      "'>Eliminar</a></td></tr> \n"; $n=0;
		  	  }
		   } while ($row = mysql_fetch_array($result)); 
		   echo "</table> \n"; 
		}
		else
		{ 
			echo "No se ha encontrado ningun registro !"; 
		} 
    }
?>