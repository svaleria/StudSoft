<?php
session_start();
include ("db_connect.php");
include ("cabecera.php");
?>

<?php
if(isset($_GET['sms']))
{
echo '<div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Verification!</strong> Done.
</div>';}?>
<div class="jumbotron">
  <h1>Grupos existentes en el sistema</h1>
  <p>
  Selecciona las siguientes opciones:</p>
</div>

<table width="456" border="1">
  <tr>
    <td width="118">Grupo</td>
    <td width="86">Modificar</td>
    <td width="67">Quitar</td>
    <td width="62">Asignar Docente</td>
    <td width="89">Asignar Estudiantes</td>
  </tr>
  <tr>
    <td>Matemáticas</td>
    <td><a href="modificar.php"><img src="images/editar.jpg" width="39" height="37" alt="quitar" /></a></td>
    <td><a href="eliminar.php"><img src="images/eliminar.jpg" width="39" height="37" alt="quitar" /></a></td>
    <td><a href="procAsocDocGrup.php"><img src="images/asoDoc.jpg" width="39" height="37" alt="asoDoc" /></a></td>
    <td><a href="procAsocEstGrupo.php"><img src="images/asoEst.jpg" width="39" height="37" alt="asoEst" /></td>
  </tr>
<tr>
    <td>Alquimia</td>
    <td><a href="modificar.php"><img src="images/editar.jpg" width="39" height="37" alt="quitar" /></a></td>
    <td><a href="eliminar.php"><img src="images/eliminar.jpg" width="39" height="37" alt="quitar" /></a></td>
    <td><a href="procAsocDocGrup.php"><img src="images/asoDoc.jpg" width="39" height="37" alt="asoDoc" /></a></td>
    <td><a href="procAsocEstGrupo.php"><img src="images/asoEst.jpg" width="39" height="37" alt="asoEst" /></td>
  </tr>
<tr>
    <td>Literatura</td>
    <td><a href="modificar.php"><img src="images/editar.jpg" width="39" height="37" alt="quitar" /></a></td>
    <td><a href="eliminar.php"><img src="images/eliminar.jpg" width="39" height="37" alt="quitar" /></a></td>
    <td><a href="procAsocDocGrup.php"><img src="images/asoDoc.jpg" width="39" height="37" alt="asoDoc" /></a></td>
    <td><a href="procAsocEstGrupo.php"><img src="images/asoEst.jpg" width="39" height="37" alt="asoEst" /></td>
  </tr>
</table>
</body>
</html>