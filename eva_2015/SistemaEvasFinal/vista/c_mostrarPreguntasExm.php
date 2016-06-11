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
		   //echo "<tr><td>Codigo</td><td>Nombre</td><td>Fecha</td><td>Hora</td><td>Ganador</td></tr> \n"; 
		   do { 
		   	   echo "<tr>";
		   	while($n<$numero_campos){
		      echo "<td>".$row[$n]."</td>";
		      $n++;
		      }
		      if($fila[0]==1){}else{
		      echo "<td><a href='modificar.php?v=".$_SESSION['tabla']."&"."pk=".$row[0].
		      "'>Modificar</a></td><td><a href='../modelo/eliminar.php?v=".$_SESSION['tabla']."&"."pk=".$row[0].
		      "'>Eliminar</a></td><td><a target='_blank' href='mostrarPDF.php?v=".$_SESSION['tabla']."'>PDF</a></td></tr> \n"; $n=0;
		  }
		   } while ($row = mysql_fetch_array($result)); 
		   echo "</table> \n"; 
		}
		else
		{ 
			echo "No se ha encontrado ningun registro !"; 
		} 
?>