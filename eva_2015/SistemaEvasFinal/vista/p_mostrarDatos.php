<?php
$n=0;
$result = mysql_query("select * from ".$_SESSION['tabla']." where publicacion='".$_SESSION['publicacion']."' ;", $conectador);
$numero_campos=mysql_num_fields($result);
//$usPreg = mysql_query("select usuario from ".$_SESSION['tabla']." where publicacion='".$_SESSION['publicacion']."' ;", $conectador);
$usPreg = mysql_query("select usuario from publicacion where publicacion='".$_SESSION['publicacion']."' ;", $conectador);
$usu=mysql_fetch_array($usPreg);
echo "<table><tr><td>El usuario ".$usu[0]." pregunto:</td> <td>".$_SESSION['publicacion'].". </td></tr></table>";
/*
if ($usu=mysql_fetch_array($usPreg)){
echo "<table><tr><td>El usuario ".$usu[0]." pregunto:</td> <td>".$_SESSION['publicacion'].". </td></tr></table>";
}
*/
if($fila[0]==2 || $fila[0]==1){ //SI ES DOCENTE
		if ($row = mysql_fetch_array($result)){ 
		  echo "<table border = '1'> \n"; 
		  echo "<tr><td>FECHA</td><td>USUARIO</td><td>RESPUESTA</td></tr> \n";
		   do { 
		   	   echo "<tr>";
		   	while($n<$numero_campos){
		      if($n==3){}else if($n==2){
		      echo "<td><TEXTAREA COLS=40 ROWS=3>".$row[$n]."</TEXTAREA></td>";
		      } else {
		      echo "<td>".$row[$n]."</td>";
		      }
		      $n++;
		      }
		      if($fila[0]==2){
		      echo "<td><a href='modificar.php?v=".$_SESSION['tabla']."&"."pk=".$row[0].
		      "'>Modificar</a></td><td><a href='../modelo/eliminar.php?v=".$_SESSION['tabla']."&"."pk=".$row[0].
		      "'>Eliminar</a></td></tr> \n"; 
				}
				$n=0;
		   } while ($row = mysql_fetch_array($result)); 
		   echo "</table> \n"; 
		}
		else
		{ echo "No se ha encontrado ningun registro !"; } 
    }


?>