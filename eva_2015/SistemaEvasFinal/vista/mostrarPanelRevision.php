<?php
$NombreUsuario = mysql_fetch_array(mysql_query("select usuario from nota_exm where id_nota='".$_SESSION['nota_exm']."' ", $conectador));
$Parcial = mysql_fetch_array( mysql_query("select id from nota_exm where id_nota='".$_SESSION['nota_exm']."' ", $conectador));
echo "<p>EVALUACION:";
echo "<p>".$Parcial[0]."<p>";
echo "<p>ESTUDIANTE:";
echo "<p>".$NombreUsuario[0]."<p>";
$Pregunta = mysql_fetch_array( mysql_query("select pregunta from pregunta where id='".$Parcial[0]."' ", $conectador));
$Respuesta = mysql_fetch_array( mysql_query("select respuesta from resp_preg_exm where USUARIO='".$NombreUsuario[0]."' ", $conectador));
$c=0;
$preguntas = mysql_query("select pregunta from pregunta where id='".$Parcial[0]."' ", $conectador);
$número_filas = mysql_num_rows($preguntas);
echo "<p><form id='form1' name='form1' method='post' action='../modelo/procRevision.php?cp=".$número_filas."&u=".$NombreUsuario[0]."&e=".$Parcial[0]."'>";
$n=0;
$puntaje=0;
$result = mysql_query("select pregunta from pregunta where id='".$Parcial[0]."'", $conectador); 
$numero_campos=mysql_num_fields($result);
$result1 = mysql_query("select respuesta from resp_preg_exm where USUARIO='".$NombreUsuario[0]."' ", $conectador); 
$numero_campos1 =mysql_num_fields($result1);

		if (($row = mysql_fetch_array($result)) && ($row1 = mysql_fetch_array($result1))){ 
		  echo "<table border = '1' WIDTH='70%'> \n"; 
		   echo "<tr><td>Pregunta</td><td>Respuesta</td><td>Puntaje</td></tr> \n"; 
		   do { 
		   	   echo "<tr>";
		   	while(($n<$numero_campos) && ($n<$numero_campos1)){
		      echo "<td>".$row[$n]."</td>";
		      echo "<td>".$row1[$n]."</td>";
$respuestaVal =mysql_fetch_array( mysql_query("select resp_sug from resp_sug, pregunta where valor='1' and pregunta='".$row[$n]."' ", $conectador));
		      if($row1[$n]==$respuestaVal[0]){$puntaje=10;}else{$puntaje=0;}
		      $n++;
		      }
$tipo =mysql_fetch_array( mysql_query("select tipo from pregunta where pregunta='".$row[0]."' ", $conectador)); 
	if($tipo[0]=='cerrada'){
		echo "<td><input type='text' value='".$puntaje."' name='".$c."' id='textfield1' /></td></tr> \n"; 			
	}else {
		      echo "<td><input type='text' name='".$c."' id='textfield1' /></td></tr> \n"; }
		      $c++; $n=0;
		   } while (($row = mysql_fetch_array($result)) && ($row1 = mysql_fetch_array($result1))); 
		   echo "</table> \n"; 
		}
		else
		{ 
			echo "No se ha encontrado ningun registro !"; 
		} 

echo "<input type='submit' name='button' id='button' value='Terminar'/>
   </form>";

?>