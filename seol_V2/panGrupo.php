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
  <h1>Grupo Matemáticas!</h1>
  <p>
  Selecciona las siguientes opciones:</p>
</div>

<table>

  <tr>
    <td><div class="jumbotron">
  <a href="panEstDeDoc.php"><h2>- Estudiantes</h2></a>
</div></td>
  </tr>
  <tr>
    <td><div class="jumbotron">
  <a href="panEvalDoc.php"><h2>- Evaluaciones</h2></a>
</div></td>
  </tr>
</table>





</body>
</html>