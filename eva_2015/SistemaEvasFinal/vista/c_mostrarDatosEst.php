<?php
$n=0;
$c=0;
$result = mysql_query("select * from ".$_SESSION['tabla']." where curso='".$_SESSION['curso']."' ;", $conectador);

//select * from tarea where curso='Biologia'  
$numero_campos=mysql_num_fields($result);

if($fila[0]==1){ //SI ES DOCENTE O ESTUDIANTE
		if ($row = mysql_fetch_array($result)){ 
		  echo "<table border = '1' WIDTH='70%'> \n"; 
		   //echo "<tr><td>Codigo</td><td>Nombre</td><td>Fecha</td><td>Hora</td><td>Ganador</td></tr> \n"; 
		   $cabecera=mysql_query("SHOW FIELDS FROM ".$_SESSION['tabla']);
		  echo "<tr>";
		  while ($cab=mysql_fetch_array($cabecera)){
		  	if($_SESSION['tabla'] == 'examen'){
		  		if($cab['Field']=='curso'){}elseif($cab['Field']=='id'){echo "<td>ESTADO</td>";}
		  		else{echo "<td>".$cab['Field']."</td>";}	}
		  	
		  $c++;
		  }
		  if($_SESSION['tabla'] == 'tarea'){echo "<td>ENVIAR TAREA</td>";}
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
		      echo "<td><a href='resParcial.php?e=".$row[$n]."'>Habilitado</a></td>";
		  		}else if($n==3){}
		  		else {echo "<td>".$row[$n]."</td>";}
		  	
		  	}

		      $n++;
		      }
		      if($fila[0]==1){

		      	if($_SESSION['tabla'] == 'tarea'){echo '<td><form enctype="multipart/form-data" id="form1" name="form1" method="post" action="../modelo/registrarDatos.php?v='.$_SESSION['tabla'].'"><input type="hidden" name="MAX_FILE_SIZE" value="10000000000" />
          <input name="fichero_usuario" type="file" /><input type="submit" name="button" id="button" value="Enviar"/>
          </form></td>';}
		      	}else{
		      echo "<td><a href='modificar.php?v=".$_SESSION['tabla']."&"."pk=".$row[0].
		      "'>Modificar</a></td><td><a href='../modelo/eliminar.php?v=".$_SESSION['tabla']."&"."pk=".$row[0].
		      "'>Eliminar</a></td><td><a target='_blank' href='mostrarPDF.php?v=".$_SESSION['tabla']."&"."pk=".$row[0].
		      "'>PDF</a></td>";

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