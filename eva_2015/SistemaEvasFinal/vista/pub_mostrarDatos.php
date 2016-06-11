<?php
$n=0;
$c=0;
$result = mysql_query("select * from ".$_SESSION['tabla']." where categoria='".$_SESSION['categoria']."' ;", $conectador);

$numero_campos=mysql_num_fields($result);

if($fila[0]==2 || $fila[0]==1){ //SI ES DOCENTE
		if ($row = mysql_fetch_array($result)){ 
		  echo "<table border = '1' WIDTH='70%'> \n"; 
		   //echo "<tr><td>Codigo</td><td>Nombre</td><td>Fecha</td><td>Hora</td><td>Ganador</td></tr> \n"; 
		   $cabecera=mysql_query("SHOW FIELDS FROM ".$_SESSION['tabla']);
		  echo "<tr>";
		  while ($cab=mysql_fetch_array($cabecera)){
		  	if($_SESSION['tabla'] == 'categoria'){
		  if($cab['Field']=='CURSO'){}else{
		  echo "<td>".$cab['Field']."</td>";	}
		  } if($_SESSION['tabla'] == 'publicacion'){
		  if($cab['Field']=='CATEGORIA'||$cab['Field']=='curso'){}
		  	else{echo "<td>".$cab['Field']."</td>";} }
		  $c++;
		  }
		  echo "</tr> \n";
		   do { 
		   	   echo "<tr>";
		   	while($n<$numero_campos){
		      
		      if($_SESSION['tabla'] == 'categoria'){
		      if($n==0){echo "<td><a href='index.php?v=p_pub&p=".$row[$n]."'>".$row[$n]."</a></td>";}
		      else if($n==1){}else{
		    echo "<td>".$row[$n]."</td>";}

		  	}
			  if($_SESSION['tabla'] == 'tarea'){
			  	if($n==0){echo "<td><a href='index.php?v=p_tar2&t=".$row[$n]."'>".$row[$n]."</a></td>";}
			  	else if($n==1){}else{
		    echo "<td>".$row[$n]."</td>";}
		    //  echo "<td><a href='index.php?v=p_tar2&t=".$row[$n]."'>".$row[$n]."</a></td>";

		  	}
		      if($_SESSION['tabla'] == 'aviso'){
		  //    echo "<td><a href='index.php?v=p_av2&t=".$row[$n]."'>".$row[$n]."</a></td>";
		  		    if($n==1){}else{
		  		    echo "<td>".$row[$n]."</td>";}
		  		}
		      if($_SESSION['tabla'] == 'publicacion'){
		     if($n==0){echo "<td><a href='index.php?v=p_resp&p=".$row[$n]."'>".$row[$n]."</a></td>";}
		     else if($n==1||$n==3){}else {echo "<td>".$row[$n]."</td>";}
		  }
		      
		      if($_SESSION['tabla'] == 'examen'){
		    
		      	if($n==0){
		      echo "<td><a href='index.php?v=p_cuest&e=".$row[$n]."'>Ver Preg.</a></td>";
		  		}else if($n==3){}
		  		else {echo "<td>".$row[$n]."</td>";}
		  	
		  	}
/*
		      else{
		      	echo "<td>".$row[$n]."</td>";
		      }
*/
		      $n++;
		      }
		      if($fila[0]==1){}else{
		      echo "<td><a href='modificar.php?v=".$_SESSION['tabla']."&"."pk=".$row[0].
		      "'>Modificar</a></td><td><a href='../modelo/eliminar.php?v=".$_SESSION['tabla']."&"."pk=".$row[0].
		      "'>Eliminar</a></td>";

		      if($_SESSION['tabla'] == 'examen'){
		      	echo "<td><form id='form1' name='form1' method='post' action='index.php?v=p_rev&e=".$row[0]."'>
          			<input type='submit' name='button' id='button' value='Calificar'/>
         		 	</form></td>";
		      }
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