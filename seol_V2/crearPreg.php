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
  <h1>Crear Preguntas!</h1>
  <p>
  Crea una o varias preguntas PASO 1:</p>
 </div>

<form action="plantilla.php" method="get">
<table width="456">

 <tr>
    <td width="118">Pregunta</td>
    <td width="86">Tipo</td>
    <td width="67">Quitar</td>
  </tr>

  <tr>
    <td><label for="pregunta"></label>
    <input type="text" name="pregunta" id="pregunta" /></td>

    <td><select name="tipo" id="tipo">
      <option>Abierta</option>
      <option>Cerrada</option>
      <option>Estructurada</option>
    </select></td>

    <td><a href="eliminar.php"><img src="images/eliminar.jpg" width="39" height="37" alt="quitar" /></a></td>

  </tr>
  <tr>
    <td><label for="pregunta"></label>
    <input type="text" name="pregunta" id="pregunta" /></td>

    <td><select name="tipo" id="tipo">
      <option>Abierta</option>
      <option>Cerrada</option>
      <option>Estructurada</option>
    </select></td>
    <td><a href="eliminar.php"><img src="images/eliminar.jpg" width="39" height="37" alt="quitar" /></a></td>

  </tr>
  <tr>
    <td><label for="pregunta"></label>
    <input type="text" name="pregunta" id="pregunta" /></td>

    <td><select name="tipo" id="tipo">
      <option>Abierta</option>
      <option>Cerrada</option>
      <option>Estructurada</option>
    </select></td>

    <td><a href="eliminar.php"><img src="images/eliminar.jpg" width="39" height="37" alt="quitar" /></a></td>

  </tr>
  <tr>
    
    <td><a href="nuevaFila.php">Nueva Pregunta</a> </td>

  </tr>
</table>
<input type="submit" name="Enviar" id="Enviar" value="Siguiente" />
</form>
</body>
</html>