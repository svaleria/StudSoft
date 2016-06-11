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
  <h1>AÑADIR OPCIONES</h1>
  <p>
  Opciones para esta pregunta:</p>
 </div>

<form action="crearPreg.php" method="get">
<table>

  <tr>
    <td><label for="opcion"></label>
    <input type="text" name="opcion" id="opcion" /></td>
    <td><a href="eliminar.php"><img src="images/eliminar.jpg" width="39" height="37" alt="quitar" /></a></td>
  </tr>
  <tr>
    <td><label for="opcion"></label>
    <input type="text" name="opcion" id="opcion" /></td>
    <td><a href="eliminar.php"><img src="images/eliminar.jpg" width="39" height="37" alt="quitar" /></a></td>
  </tr>
  <tr>
    <td><label for="opcion"></label>
    <input type="text" name="opcion" id="opcion" /></td>
    <td><a href="eliminar.php"><img src="images/eliminar.jpg" width="39" height="37" alt="quitar" /></a></td>
  </tr>
  <tr>
    
    <td><a href="nuevaOpcion.php">Nueva Opción</a> </td>

  </tr>
</table>
<input type="submit" name="Enviar" id="Enviar" value="Terminar" />
</form>
</body>
</html>