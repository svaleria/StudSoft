<?php
/*
global $dirBD;
global $nameBD;
global $usBD;
global $passUsBD;
global $dirServ;
global $nroPuert;
global $usServ;
global $passServ;
*/
$dirBD=$_POST['dirBD'];
$nameBD=$_POST['nameBD'];

$userBD=$_POST['userBD'];
$passUsBD=$_POST['passUsBD'];
$dirServ=$_POST['dirServ'];
$nroPuert=$_POST['nroPuert'];
$usServ=$_POST['usServ'];
$passServ=$_POST['passServ'];

$user=$_POST['user'];
$password=$_POST['password'];
$nombre=$_POST['nombre'];
$email=$_POST['email'];

$conectador=mysql_connect("'".$dirBD."'","'".$userBD."'");
$base="'".$nameBD."'";
mysql_select_db($base,$conectador);

$result = mysql_query("select * from estado;", $conectador); 
$row = mysql_fetch_array($result);
echo $row[0];

?>