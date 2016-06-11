<?php
$n=0;
$result = mysql_query("select * from rol;", $conectador); 
$numero_campos=mysql_num_fields($result);
		if ($row = mysql_fetch_array($result)){ 
		  echo "<table border = '1' WIDTH='70%'> \n"; 
		   //echo "<tr><td>Codigo</td><td>Nombre</td><td>Fecha</td><td>Hora</td><td>Ganador</td></tr> \n"; 
		   do { 
		   	   echo "<tr>";
		   	while($n<$numero_campos){
		      echo "<td>".$row[$n]."</td>";
		      $n++;
		      }
		      echo "<td><a href='modificar.php?v=rol &"."pk=".$row[0].
		      "'>Modificar</a></td><td><a href='../modelo/eliminar.php?v=rol &"."pk=".$row[0].
		      "'>Eliminar</a></td></tr> \n"; $n=0;

		   } while ($row = mysql_fetch_array($result)); 
		   echo "</table> \n"; 
		}
		else
		{ 
			echo "No se ha encontrado ningun registro !"; 
		} 
?>