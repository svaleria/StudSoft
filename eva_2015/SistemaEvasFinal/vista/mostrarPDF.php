<?php
session_start();
require('../controlador/pdf.php');
include("../modelo/conexion.php");
$resultado=mysql_query("select * from ".$_SESSION['tabla']."",$conectador);
$filas = mysql_numrows($resultado);
$c=0;
$cabecera=mysql_query("SHOW FIELDS FROM ".$_SESSION['tabla']);
while ($cab=mysql_fetch_array($cabecera)){
$encab[$c]=$cab['Field'];
$col[$c]="";
//echo "<td>".$cab['Field']."</td>";	
$c++;
}
/*
$colnombre = "";
$coledad = "";
$colcorreo= "";
$colcontrasena = "";
$colestado = "";
*/
$n=$c;
$c=0;
while($row = mysql_fetch_array($resultado))
{

//while($c<$n){
	if($c==0){$encab[$c] = $row[$encab[$c]];}
	else{$encab[$c] = substr($row[$encab[$c]],0,20);}
//$c++;
//}
//$c=0;

//while($c<$n){
	$col[$c] = $col[$c].$encab[$c]."\n";
//}
$c++;
}
/*
while($row = mysql_fetch_array($resultado))
{
    $nombre = $row["nombre"];
    $edad = substr($row["edad"],0,20);
	$correo = substr($row["correo"],0,20);
	$contrasena = substr($row["contrasena"],0,20);
	$estado = substr($row["estado"],0,20);
	
    $colnombre = $colnombre.$nombre."\n";
    $coledad = $coledad.$edad."\n";
	$colcorreo = $colcorreo.$correo."\n";
	$colcontrasena = $colcontrasena.$contrasena."\n";
	$colestado = $colestado.$estado."\n";

}
*/
mysql_close();

//Create a new PDF file
$pdf=new FPDF();
$pdf->AddPage();

//Fields Name position
$posicionYdelCampo = 20;
//Table position, under Fields Name
$posicionYdelaTabla = 26;

//First create each Field Name
//Gray color filling each Field Name box
$pdf->SetFillColor(232,232,232);
//Bold Font for Field Name

//Mostrando encabezado
$pdf->SetFont('Arial','B',12);
$pdf->SetY($posicionYdelCampo);
$c=0;
while($c<$n){
	$pdf->SetX(20);
	$pdf->Cell(40,6,"'".$encab[$c]."'",1,0,'L',1);
$c++;
}
/*
$pdf->SetX(20);
$pdf->Cell(40,6,'Nombre',1,0,'L',1);
$pdf->SetX(60);
$pdf->Cell(15,6,'Edad',1,0,'L',1);
$pdf->SetX(75);
$pdf->Cell(60,6,'Correo',1,0,'L',1);
$pdf->SetX(135);
$pdf->Cell(50,6,'Contraseña',1,0,'L',1);
$pdf->SetX(185);
$pdf->Cell(18,6,'Estado',1,0,'L',1);
*/
$pdf->Ln();

//Mostrando las filas
$pdf->SetFont('Arial','',12);
$c=0;
while($c<$n){
$pdf->SetY($posicionYdelaTabla);
$pdf->SetX(20);
$pdf->MultiCell(40,6,$col[$c],1);
$c++;
}
/*
$pdf->SetY($posicionYdelaTabla);
$pdf->SetX(20);
$pdf->MultiCell(40,6,$colnombre,1);
$pdf->SetY($posicionYdelaTabla);
$pdf->SetX(60);
$pdf->MultiCell(15,6,$coledad,1);
$pdf->SetY($posicionYdelaTabla);
$pdf->SetX(75);
$pdf->MultiCell(60,6,$colcorreo,1);
$pdf->SetY($posicionYdelaTabla);
$pdf->SetX(135);
$pdf->MultiCell(50,6,$colcontrasena,1);
$pdf->SetY($posicionYdelaTabla);
$pdf->SetX(185);
$pdf->MultiCell(18,6,$colestado,1);
*/


$i = 0;
$pdf->SetY($posicionYdelaTabla);
while ($i < $filas)
{
    $pdf->SetX(20);
    $pdf->MultiCell(183,6,'',1);
    $i = $i +1;
}

$pdf->Output();
?>