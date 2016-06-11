<?php
echo '"DOCEBITO" - SISTEMA DE GESTION DE APRENDIZAJE
	<br>
	---------------------------------------------------------------------------------------------- 
	<br><table WIDTH="15%">
  <tr>
  <td><form id="form1" name="form1" method="post" action="index.php?v=p_adm">
          <input type="submit" name="button" id="button" value="Inicio"/>
          </form></td>';
/*
          <td><form id="form1" name="form1" method="post" action="index.php?v=p_tar">
          <input type="submit" name="button" id="button" value="Tareas"/>
          </form></td><td><form id="form1" name="form1" method="post" action="index.php?p=cat">
          <input type="submit" name="button" id="button" value="Foro"/>
          </form></td><td><form id="form1" name="form1" method="post" action="index.php?p=av">
          <input type="submit" name="button" id="button" value="Avisos"/>
          </form></td><td><form id="form1" name="form1" method="post" action="index.php?p=ev">
          <input type="submit" name="button" id="button" value="Evaluaciones"/>
          </form></td>
*/
echo '<td><form id="form2" name="form2" action="../controlador/destruirSession.php" method="POST">
  <input type="submit" name="destruirSession" value="Cerrar Sesion">
</form></td></table><p><p><p>';
?>