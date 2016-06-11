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
if($_SESSION['tabla']=='tarea'){
	echo '<form id="form1" name="form1" method="post" action="index.php?v=p_ed&c='.$_SESSION['curso'].'">
          <input type="submit" name="button" id="button" value="Volver al menu"/>
          </form> <p>';
}
echo "<table WIDTH='70%'><tr><td>";
echo "<p>Registrar ".$_SESSION['tabla'].": ";
$result=mysql_query("describe ".$_SESSION['tabla']);

	echo '<p><form enctype="multipart/form-data" id="form1" name="form1" method="post" action="../modelo/registrarDatos.php?v='.$_SESSION['tabla'].'">
          <p>';
while ($row=mysql_fetch_array($result)){

	if($row[0]=='CONTENIDO'){
		echo "<label for='textfield'>".$row[0]."</label><p>
		<textarea id='textfield3' name="."'".$row[0]."'"." rows='10' cols='50'></textarea> <p>";
        //<input type='text' name="."'".$row[0]."'"." id='textfield3' /> <p>";
	}else {
		echo "<label for='textfield'>".$row[0]."</label>
        <input type='text'";

        if($_SESSION['tabla']=='categoria'||$_SESSION['tabla']=='publicacion'||$_SESSION['tabla']=='respuesta'){
        	echo "value='".$row[0]."'";
        }

        echo "name="."'".$row[0]."'"." id='textfield3' /> <p>";
	}
	}
	if($_SESSION['tabla']=='tarea'){
    	echo  "<input type='hidden' name='MAX_FILE_SIZE' value='10000000000' />
          <input name='fichero_usuario' type='file' /><p>";
      }
	echo "<input type='submit' name='button' id='button' value='Enviar'/>
          </form> <p>";
echo "</td><td>";
if($_SESSION['tabla']=='pregunta'){
echo "PREGUNTAS SUGERIDAS <br>";
echo '<form id="form1" name="form1" method="post" action="registrar.php">
          <input type="submit" name="button" id="button" value="Nueva respuesta sugerida"/>
          </form> <p>';
include 'mostrarRespSug.php';
$_SESSION['tabla']='resp_sug';
}
echo "</td></tr></table>";
?>