<?php
session_start();
include '../modelo/conexion.php';
include 'cabeceraDocEst.php';
echo 'REALIZAR PARCIAL: <p>';
$n=0;
$c=0;
$p=0;
$_SESSION['examen'] = $_GET['e'];
$pregunta='pregunta';
$abierta=0;
$_SESSION['tabla']=$pregunta;
$result1 = mysql_query("select opcion from opcion where id_pregunta= 	5;", $conectador); 
$result = mysql_query("select * from ".$_SESSION['tabla']." where id= ".$_SESSION['examen'].";", $conectador); 
$numero_campos=mysql_num_fields($result);
echo "<form id='form1' name='form1' method='post' action='../modelo/registrarDatosParcial.php'>";
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
		      if($row[$n]=='cerrada'){$abierta=1;}else{$abierta=0;}
		      $n++;
		      }
		      $n=0;
		      $_SESSION['arreglo'][]=$row[0];
		      if($abierta==0){echo "<td><input type='text' name='".$p."' id='textfield1' /></td></tr> \n";}
			  if($abierta==1){echo "<td><select name='".$p."'>";
			  
			  while ($publicar = mysql_fetch_array($result1))
				{
     			echo "<option>".$publicar[0]."</option>";
				}

			  echo  "</select></td></tr>";
			
				}

		      $p++;
		   } while ($row = mysql_fetch_array($result)); 
		   echo "</table> \n"; 
		}
		else
		{ 
			echo "No se ha encontrado ningun registro !"; 
		} 
		echo "<input type='submit' name='button' id='button' value='Terminar'/>
   </form>";
$resp_preg_exm='resp_preg_exm';
$_SESSION['tabla']=$resp_preg_exm;
$_SESSION['MaxPreguntas']=$p;
?>