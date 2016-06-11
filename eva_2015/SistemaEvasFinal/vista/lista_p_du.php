<?php
$_SESSION['categoria'] = $_GET['v'];
$resultado = mysql_query("select * from publicacion where categoria="."'".$_SESSION['categoria']."'".";", $conectador); 
$row = mysql_fetch_array($resultado);
do {echo "<a href='index.php?v=p_ed&c=".$row[0]."'>".$row[0]."</a><p>\n"; 
}while ($row = mysql_fetch_array($resultado)); 
echo "\n"; 
?>