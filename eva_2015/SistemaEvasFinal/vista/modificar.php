<?php
session_start();
include '../modelo/conexion.php';
$rol = mysql_query("SELECT r.rol, r.usuario FROM usuario u, rol r WHERE u.usuario = r.usuario and u.USUARIO="."'".$_SESSION["user"]."'"."and u.CONTRASENA="."'".$_SESSION["passwd"]."'");
$fila = mysql_fetch_row($rol);
// ADMINISTRADOR
      if($fila[0]==3){
	include 'cabeceraAdm.php';
	}
// DOCENTE O USUARIO
      if($fila[0]==2){
	include 'cabeceraDocEst.php';
	}
echo "<p>Modificar ".$_SESSION['tabla'].": ";
$_SESSION['primaria'] = $_GET['pk'];
$result=mysql_query("describe ".$_SESSION['tabla']);
$result1=mysql_query("describe ".$_SESSION['tabla']);
$row1=mysql_fetch_array($result1);
$result2=mysql_query("select * from ".$_SESSION['tabla']." where ".$row1[0]."='".$_SESSION['primaria']."' ");
$row2=mysql_fetch_array($result2);
$n=0;
	//echo $row1[0];
	echo '<p><form enctype="multipart/form-data" id="form1" name="form1" method="post" action="../modelo/procModificacion.php">
          <p>';
while ($row=mysql_fetch_array($result)){

	if($row[0]=='CONTENIDO'){
		echo "<label for='textfield'>".$row[0]."</label><p>
		<textarea id='textfield3' value='".$row2[$n]."' name="."'".$row[0]."'"." rows='10' cols='50'></textarea> <p>";
        //<input type='text' name="."'".$row[0]."'"." id='textfield3' /> <p>";
	}else {
		echo "<label for='textfield'>".$row[0]."</label>
        <input type='text' value='".$row2[$n]."' name="."'".$row[0]."'"." id='textfield3' /> <p>";
	}
$n++;
	}
	if($_SESSION['tabla']=='tarea'){
    	echo  "<input type='hidden' name='MAX_FILE_SIZE' value='10000000000' />
          <input name='fichero_usuario' type='file' /><p>";
      }
	echo "<input type='submit' name='button' id='button' value='Enviar'/>
          </form> <p>";

?>