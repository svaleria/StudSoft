<?php
$n=0;
$result = mysql_query("select * from ".$_SESSION['tabla']." where id='".$_SESSION['examen']."' ;", $conectador);

$numero_campos=mysql_num_fields($result);

if($fila[0]==2){ //SI ES DOCENTE
		if ($row = mysql_fetch_array($result)){ 
		  echo "<table border = '1' WIDTH='70%'> \n"; 
		  if($_SESSION['pagina'] == 'p_cuest'){ 
//			echo "<tr><td>RESPUESTAS</td><td>PREGUNTA</td></tr> \n"; 
			echo "<tr><td>PREGUNTA</td><td>TIPO</td></tr> \n"; 
		  }
		  if($_SESSION['pagina'] == 'p_rev'){ 
			echo "<tr><td>NOTA</td><td>ESTUDIANTE</td></tr> \n"; 
		  }
		   do { 
		   	   echo "<tr>";
		   	while($n<$numero_campos){

		if($_SESSION['pagina'] == 'p_cuest'){ 
		      if($n==0){
		      	//echo "<td><a href='index.php?v=p_cuest_resp&r=".$row[$n]."'>Ver respuestas...</a></td>";
		      }
		      else if($n==2){}else
		       {echo "<td>".$row[$n]."</td>";}
		}
		if($_SESSION['pagina'] == 'p_rev'){ 
		      if($n==0){}
		      else if($n==2){}else
		       {echo "<td>".$row[$n]."</td>";}
		}

		      $n++;
		      }

		      echo "<td><a href='modificar.php?v=".$_SESSION['tabla']."&"."pk=".$row[0].
		      "'>Modificar</a></td><td><a href='../modelo/eliminar.php?v=".$_SESSION['tabla']."&"."pk=".$row[0].
		      "'>Eliminar</a></td>";
			if($_SESSION['tabla'] == 'nota_exm'){
		      	echo "<td><form id='form1' name='form1' method='post' action='index.php?v=p_respExm&e=".$row[0]."'>
          			<input type='submit' name='button' id='button' value='Respuestas'/>
         		 	</form></td>";
		      }
		      echo "</tr> \n"; $n=0;
		   } while ($row = mysql_fetch_array($result)); 
		   echo "</table> \n"; 
		}
		else
		{ 
			echo "No se ha encontrado ningun registro !"; 
		} 
    }

if($fila[0]==1){ //SI ES ESTUDIANTE
		if ($row = mysql_fetch_array($result)){ 
		  echo "<table border = '1' WIDTH='70%'> \n"; 
		   //echo "<tr><td>Codigo</td><td>Nombre</td><td>Fecha</td><td>Hora</td><td>Ganador</td></tr> \n"; 
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
    }

?>