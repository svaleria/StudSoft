<?php
$n=0;
$c=0;
$result = mysql_query("select * from ".$_SESSION['tabla'].";", $conectador); 
$numero_campos=mysql_num_fields($result);
		if ($row = mysql_fetch_array($result)){ 
		  echo "<table border = '1' WIDTH='70%'> \n"; 
		  //datos de cabecera en un arreglo y luego generar en un pequeño while
		  $cabecera=mysql_query("SHOW FIELDS FROM ".$_SESSION['tabla']);
		  echo "<tr>";
		  while ($cab=mysql_fetch_array($cabecera)){
		  echo "<td>".$cab['Field']."</td>";	
		  $c++;
		  }
		  echo "</tr> \n"; 
		   do { 
		   	   echo "<tr>";
		   	while($n<$numero_campos){
		      echo "<td>".$row[$n]."</td>";
		      $n++;
		      }
		      echo "</tr> \n"; $n=0;

		   } while ($row = mysql_fetch_array($result)); 
		   echo "</table> \n"; 
		}
		else
		{ 
			echo "No se ha encontrado ningun registro !"; 
		} 
?>