<?php
$result = mysql_query("select contenido from ".$_SESSION['tabla']." where tarea='".$_SESSION['tarea']."' ", $conectador);
$ruta = mysql_query("select ruta from archivo where tarea='".$_SESSION['tarea']."' ", $conectador);
$row = mysql_fetch_array($result);
echo "<br>---------------------------------------------------------<p><p><p><p><p><p>DESCRIPCION:<br>---------------------------------------------------------";
echo "<p>".$row[0];
echo "<br>---------------------------------------------------------<p><p><p><p><p><p>DATOS ADJUNTOS:<br>---------------------------------------------------------<br>";
$n=0;
if($rut = mysql_fetch_array($ruta)){
echo "<a target='_blank' href='".$rut[0]."'>*   -".$rut[0]."</a>";
}
?>