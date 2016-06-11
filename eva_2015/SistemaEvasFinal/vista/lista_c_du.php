<?php
$resultado = mysql_query("select curso from curso_usuario where usuario="."'".$_SESSION['user']."'".";", $conectador); 
$row = mysql_fetch_array($resultado);
do {echo "<a href='index.php?v=p_ed&c=".$row[0]."'>".$row[0]."</a><p>\n"; 
}while ($row = mysql_fetch_array($resultado)); 
echo "\n"; 
?>