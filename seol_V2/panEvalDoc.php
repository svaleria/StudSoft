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
  <h1>Evaluaciones del grupo Matemáticas!</h1>
  <p>
  Selecciona las siguientes opciones o crea una evaluación:</p>
  <p> <a href="crearPreg.php"> <h2>Crear evaluación</h2> </a>
</div>

<table width="456" border="1">
  <tr>
    <td width="118">Evaluacion</td>
    <td width="86">Modificar</td>
    <td width="67">Quitar</td>
    <td width="62">Detalle</td>
    <td width="89">Estudiantes</td>
  </tr>
  <tr>
    <td>1er parcial</td>
    <td><a href="modificar.php"><img src="images/editar.jpg" width="39" height="37" alt="quitar" /></a></td>
    <td><a href="eliminar.php"><img src="images/eliminar.jpg" width="39" height="37" alt="quitar" /></a></td>
    <td><a href="pdf.php"><img src="images/pdf.jpg" width="39" height="37" alt="buscar" /></a><a href="eliminar.php"></a></td>
    <td><a href="asocEstd.php"><img src="images/asociar.jpg" width="39" height="37" alt="quitar" /></a><a href="buscar.php"></a></td>
  </tr>
<tr>
    <td>2do parcial</td>
    <td><a href="modificar.php"><img src="images/editar.jpg" width="39" height="37" alt="quitar" /></a></td>
    <td><a href="eliminar.php"><img src="images/eliminar.jpg" width="39" height="37" alt="quitar" /></a></td>
    <td><a href="pdf.php"><img src="images/pdf.jpg" width="39" height="37" alt="buscar" /></a><a href="eliminar.php"></a></td>
    <td><a href="asocEstd.php"><img src="images/asociar.jpg" width="39" height="37" alt="quitar" /></a><a href="buscar.php"></a></td>
  </tr>
<tr>
    <td>3er parcial</td>
    <td><a href="modificar.php"><img src="images/editar.jpg" width="39" height="37" alt="quitar" /></a></td>
    <td><a href="eliminar.php"><img src="images/eliminar.jpg" width="39" height="37" alt="quitar" /></a></td>
    <td><a href="pdf.php"><img src="images/pdf.jpg" width="39" height="37" alt="buscar" /></a><a href="eliminar.php"></a></td>
    <td><a href="asocEstd.php"><img src="images/asociar.jpg" width="39" height="37" alt="quitar" /></a><a href="buscar.php"></a></td>
  </tr>
</table>
</body>
</html>