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
  <h1>Estudiantes del Grupo Matemáticas!</h1>
  <p>
  Estos son todos tus estudiantes:</p>
</div>

<table width="426" border="1">
  <tr>
    <td width="128">Nombre</td>
    <td width="136">Apellido</td>
    <td width="64">Edad</td>
    <td width="31">Quitar</td>
    <td width="33">Detalle</td>
  </tr>
  <tr>
    <td>Fermin</td>
    <td>Arispe</td>
    <td>45</td>
    <td><a href="eliminar.php"><img src="images/eliminar.jpg" width="39" height="37" alt="quitar" /></a></td>
    <td><a href="buscar.php"><img src="images/buscar.jpg" width="39" height="37" alt="buscar" /></a></td>
  </tr>
  <tr>
    <td>Julian</td>
    <td>Coronado</td>
    <td>34</td>
    <td><img src="images/eliminar.jpg" width="39" height="37" alt="quitar" /></td>
    <td><img src="images/buscar.jpg" width="39" height="37" alt="quitar" /></td>
  </tr>
  <tr>
    <td>Rimer</td>
    <td>Gauzan</td>
    <td>23</td>
    <td><img src="images/eliminar.jpg" width="39" height="37" alt="quitar" /></td>
    <td><img src="images/buscar.jpg" width="39" height="37" alt="quitar" /></td>
  </tr>
</table>

</body>
</html>