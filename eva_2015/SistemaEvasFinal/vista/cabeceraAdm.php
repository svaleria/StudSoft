<?php
echo '"DOCEBITO" - SISTEMA DE GESTION DE APRENDIZAJE
	<br>
	---------------------------------------------------------------------------------------------- 
	<br><table WIDTH="20%">
  <tr>
  <td><form id="form1" name="form1" method="post" action="index.php?v=p_adm">
          <input type="submit" name="button" id="button" value="Inicio"/>
          </form></td><td><form id="form1" name="form1" method="post" action="index.php?v=pa_us">
          <input type="submit" name="button" id="button" value="Usuarios"/>
          </form></td><td><form id="form1" name="form1" method="post" action="index.php?v=pa_cu">
          <input type="submit" name="button" id="button" value="Cursos"/>
          </form></td><td><form id="form2" name="form2" action="../controlador/destruirSession.php" method="POST">
  <input type="submit" name="destruirSession" value="Cerrar Sesion">
</form></td></table><p><p><p>';
?>