<?php
session_start();
include '../modelo/conexion.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>DOCEBITO</title>
</head>
<body>
<?php
$usuario='usuario';
$rol='ROL';
$curso='curso';
$curso_usuario='curso_usuario';
$tarea='tarea';
$examen='examen';
$aviso='aviso';
$categoria='categoria';
$publicacion='publicacion';
$respuesta='respuesta';
$pregunta='pregunta';
$nota_exm='nota_exm';
$resp_preg_exm='resp_preg_exm';
$resp_sug='resp_sug';
$consulta='consulta';
$archivo='archivo';

$_SESSION['pagina'] = $_GET['v'];
		$rol = mysql_query("SELECT r.rol, r.usuario FROM usuario u, rol r WHERE u.usuario = r.usuario and u.USUARIO="."'".$_SESSION["user"]."'"."and u.CONTRASENA="."'".$_SESSION["passwd"]."'");
    	$fila = mysql_fetch_row($rol);
      $_SESSION['Rol'] = $fila;
   		// ADMINISTRADOR
      if($fila[0]==3){
      include 'cabeceraAdm.php';
   			if($_SESSION['pagina'] == 'p_adm'){
   			echo '<p>----------------------------------------------------------------------------------------------
              <br>PANEL DE ADMINISTRADOR 
              <br>----------------------------------------------------------------------------------------------';
        echo "<p><p><table WIDTH='35%'>
  <tr>
  <td>Bienvenido ".$_SESSION["user"].". Este es su panel de administracion, desde aqui ud. podra gestionar los CURSOS y los USUARIOS del sistema.
            Escoja una de las opciones del menu.</td>";
        echo '</tr></table>';
   			}
        if($_SESSION['pagina'] == 'pa_us'){
          echo 'GESTIONAR USUARIOS';
          echo '<p><form id="form1" name="form1" method="post" action="index.php?v=pas_us_cu">
          <input type="submit" name="button" id="button" value="Inscribir usuario a curso"/>
          </form> <p>';
          echo '<p><form id="form2" name="form2" method="post" action="index.php?v=reg_us">
          <input type="submit" name="button" id="button" value="Nuevo usuario"/>
          </form> <p>';
   			  $_SESSION['tabla'] = $usuario;
          include ("mostrarDatos.php");
        }
         if($_SESSION['pagina'] == 'reg_us'){
         $_SESSION['tabla'] = $usuario;
          header("Location:registrar.php");
        }
        if($_SESSION['pagina'] == 'pa_cu'){
          echo 'GESTIONAR CURSOS';
          echo '<p><form id="form1" name="form1" method="post" action="index.php?v=pas_us_cu">
          <input type="submit" name="button" id="button" value="Inscribir usuario a curso"/>
          </form> <p>';
          echo '<p><form id="form2" name="form2" method="post" action="index.php?v=reg_cu">
          <input type="submit" name="button" id="button" value="Nuevo curso"/>
          </form> <p>';
          $_SESSION['tabla'] = $curso;
          include'mostrarDatos.php';
        }
        if($_SESSION['pagina'] == 'reg_cu'){
          echo 'REGISTRAR NUEVO CURSO';
          echo '<p><form id="form1" name="form1" method="post" action="../modelo/registrarDatos.php?v=curso">
          <p>
          <label for="textfield">Curso</label>
          <input type="text" name="curso" id="textfield0" />
          <p>
          <input type="submit" name="button" id="button" value="Registrar"/>
          </form> <p>';
          $_SESSION['tabla'] = $curso;
          include ("mostrarDatos.php");
        }
        if($_SESSION['pagina'] == 'pas_us_cu'){
          echo 'INSCRIBIR USUARIO A CURSO';
          echo '<p><form id="form1" name="form1" method="post" action="../modelo/registrarCursoUsuario.php">
          <p>
          <label for="textfield">ID</label>
          <input type="text" name="id" id="textfield3" />
          <p>
          <label for="textfield">Curso</label>
          <input type="text" name="curso" id="textfield2" />
          <p>
          <label for="textfield">Usuario</label>
          <input type="text" name="user" id="textfield1" />
          <p>
          <p>
          <label for="textfield">Rol</label>
          <select name="rol">
          <option>Docente</option>
          <option>Estudiante</option>
          </select>
          <p>
          <input type="submit" name="button" id="button" value="Inscribir"/>
          </form> <p>';
          echo '<p>Cursos:<p>';
          $_SESSION['tabla'] = $curso;
          include ("mostrarDatosSP.php");
          echo '<p>Usuarios<p>';
          $_SESSION['tabla'] = $usuario;
          include ("mostrarDatosSP.php");
          echo '<p>Inscritos<p>';
          $_SESSION['tabla'] = $curso_usuario;
          include ("mostrarDatosSP.php");
         // echo '<p>Roles<p>';
         // include ("mostrarRoles.php");
        }
   		}
      //DOCENTE Y ESTUDIANTE
   		if($fila[0]==2 || $fila[0]==1){
      include 'cabeceraDocEst.php';
      if($_SESSION['pagina'] == 'p_adm'){        
        if($fila[0]==2){
        echo '----------------------------------------------------------------------------------------------
              <br>PANEL DE DOCENTE GESTOR DE CURSOS 
              <br>----------------------------------------------------------------------------------------------';
        echo "<br><table WIDTH='35%'>
  <tr>
  <td>Bienvenido docente ".$_SESSION["user"].". Este es su panel de administracion, desde aqui ud. podra gestionar los CURSOS en los cuales usted esta dando docencia.
  Escoga un curso para configurarlo.</td>";
        echo '</tr></table><p><p>CURSOS:<br>-------------------------------------------<br>'; }
        if($fila[0]==1){
        echo '----------------------------------------------------------------------------------------------
              <br>AREA DE ESTUDIANTE
              <br>----------------------------------------------------------------------------------------------';
        echo "<br><table WIDTH='35%'>
  <tr>
  <td>Bienvenido ".$_SESSION["user"].". Desde este lugar podras acceder a los cursos en los que estas inscrito.
   Podras ver material nuevo de tus materias.
   Escoge un curso en el que estes inscrito.</td>";
        echo '</tr></table><p><p>CURSOS:<br>-------------------------------------------<br>';
        }
        include 'lista_c_du.php'; // lista de cursos
      }
      if($_SESSION['pagina'] == 'p_ed'){     
      $_SESSION['curso'] = $_GET['c'];   
       if($fila[0]==2){echo 'EDITAR: <p>';}
       if($fila[0]==1){echo 'VER: <p>';}
        include 'opciones_ed.php'; // botones de Tarea, Foro, Aviso, Eval
        }
      //TAREAS
      if($_SESSION['pagina'] == 'p_tar'){
        $_SESSION['tabla'] = $tarea;
       echo '<p><form id="form1" name="form1" method="post" action="index.php?v=p_ed&c='.$_SESSION['curso'].'">
          <input type="submit" name="button" id="button" value="Volver al menu"/>
          </form> <p>';
        echo '<table><tr><td>Panel de Tareas:</td>';
      if($fila[0]==2){
        echo '<td><form id="form1" name="form1" method="post" action="registrar.php">
          <input type="submit" name="button" id="button" value="Nueva tarea..."/>
          </form></td></tr></table> <p>';
        }
        include 'c_mostrarDatos.php';
        }
        if($_SESSION['pagina'] == 'p_entreg'){     
        echo 'ESTUDIANTES QUE ENTREGARON SUS TRABAJOS: <p>';
        $_SESSION['tabla'] = $archivo;
        $_SESSION['tarea'] = $_GET['t'];
        include 'mostrardatosArch.php';
        }
      if($_SESSION['pagina'] == 'p_tar2'){        
        echo 'TITULO:<br>---------------------------------------------------------<br>';
        $_SESSION['tarea'] = $_GET['t'];
        // Vista previa de la tarea
        echo $_SESSION['tarea'];
        include 'mostrarCuerpo.php';
        }
      //EVALUACIONES
      if($_SESSION['pagina'] == 'p_ev'){        
        echo 'EVALUACIONES: <p>';
        $_SESSION['tabla'] = $examen;
        if($fila[0]==2){
        echo '<table><tr><td>Panel de Evaluaciones:</td><td><form id="form1" name="form1" method="post" action="registrar.php">
          <input type="submit" name="button" id="button" value="Nueva evaluacion..."/>
          </form></td></tr></table> <p>';include 'c_mostrarDatos.php';}
        if($fila[0]==1){
        include 'c_mostrarDatosEst.php';}
        }
      if($_SESSION['pagina'] == 'p_cuest'){        
        echo 'PREGUNTAS: <p>';
        $_SESSION['tabla'] = $pregunta;
        $_SESSION['examen'] = $_GET['e'];
        echo '<table><tr><td>Panel de Preguntas:</td><td><form id="form1" name="form1" method="post" action="registrar.php">
          <input type="submit" name="button" id="button" value="Nueva Pregunta"/>
          </form></td><td></td></tr></table> <p>';
        include 'e_mostrarDatos.php';
        }
      if($_SESSION['pagina'] == 'p_cuest_resp'){        
        echo 'RESPUESTAS: <p>';
        $_SESSION['tabla'] = $resp_preg_exm;
        $_SESSION['respuesta'] = $_GET['r'];
        echo '<table><tr><td>Panel de Respuestas:</td><td><form id="form1" name="form1" method="post" action="registrar.php">
          <input type="submit" name="button" id="button" value="Nueva Respuesta..."/>
          </form></td></tr></table> <p>';
        include 'r_mostrarDatos.php';
        }  
      if($_SESSION['pagina'] == 'p_rev'){        
        echo 'ESTUDIANTES QUE DIERON EL EXAMEN: <p>';
        $_SESSION['tabla'] = $nota_exm;
        $_SESSION['examen'] = $_GET['e'];
        include 'e_mostrarDatos.php';
        }
      if($_SESSION['pagina'] == 'p_respExm'){        
        echo 'REVISAR PARCIAL: <p>';
        $_SESSION['nota_exm'] = $_GET['e'];
        include 'mostrarPanelRevision.php';
        }
/*
      if($_SESSION['pagina'] == 'p_realExm'){        
        echo 'REALIZAR PARCIAL: <p>';
        $_SESSION['examen'] = $_GET['e'];
        $_SESSION['tabla']=$usuario;
        include 'c_mostrarPreguntasExm.php';
        }          
*/
      //AVISOS
      if($_SESSION['pagina'] == 'p_av'){        
        echo 'AVISOS: <p>';
        $_SESSION['tabla'] = $aviso;
        if($fila[0]==2){
        echo '<table><tr><td>Panel de avisos:</td><td><form id="form1" name="form1" method="post" action="registrar.php">
          <input type="submit" name="button" id="button" value="Nuevo aviso.."/>
          </form></td></tr></table> <p>';}
        include 'c_mostrarDatos.php';
        }
        //FORO
      if($_SESSION['pagina'] == 'p_cat'){        
        echo 'FORO DE LA MATERIA: <p>Escoja una categoria:<br>';
        $_SESSION['tabla'] = $categoria;
        if($fila[0]==2){
        echo '<table><tr><td>Panel de Categorias del Foro:</td><td><form id="form1" name="form1" method="post" action="registrar.php">
          <input type="submit" name="button" id="button" value="Nueva categoria..."/>
          </form></td></tr></table> <p>';}
        include 'c_mostrarDatos.php';
        }
      if($_SESSION['pagina'] == 'p_pub'){        
        $_SESSION['publicacion'] = $_GET['p'];
        $_SESSION['categoria'] = $_GET['p'];
        echo 'Preguntas sobre: '.$_SESSION['publicacion'].' <p>';
        $_SESSION['tabla'] = $publicacion;
        echo '<table><tr><td>Panel de Publicaciones:</td><td><form id="form1" name="form1" method="post" action="registrar.php">
          <input type="submit" name="button" id="button" value="Nueva publicacion..."/>
          </form></td></tr></table> <p>';
        include 'pub_mostrarDatos.php'; // solo cabeceras
        }
        //Respuestas a las preguntas del foro
      if($_SESSION['pagina'] == 'p_resp'){        
        $_SESSION['publicacion'] = $_GET['p'];
        $_SESSION['tabla'] = $respuesta;
        echo '<form id="form1" name="form1" method="post" action="index.php?v=form_resp">
          <input type="submit" name="button" id="button" value="Responder..."/>
          </form>';
        include 'p_mostrarDatos.php'; // solo cabeceras
        }
      if($_SESSION['pagina'] == 'form_resp'){
          echo 'RESPONDER...';
          echo '<p><form id="form1" name="form1" method="post" action="registrarResp.php">
          <p>
          <label for="textfield">id_respuesta</label>
          <input type="text" name="id_respuesta" id="textfield3" />
          <p>
          <label for="textfield">USUARIO</label>
          <input type="text" name="usuario" id="textfield2" />
          <p>
          <label for="textfield">respuesta</label>
          <input type="text" name="respuesta" id="textfield1" />
          <p>
           <label for="textfield">PUBLICACION</label>
          <input type="text" name="publicacion" id="textfield1" />
          <p>
          <input type="submit" name="button" id="button" value="Enviar"/>
          </form> <p>';
          
        }  

      }
?>
</body>
</html>