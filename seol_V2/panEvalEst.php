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

</div>

<table>

  <tr>
    <td><div class="jumbotron">
  <a href="panEvHacer.php"><h2>- 2do Parcial Matemáticas</h2></a>
</div></td>
  </tr>
  <tr>
    <td><div class="jumbotron">
  <a href="panEvHacer.php"><h2>- Final Alquimia</h2></a>
</div></td>
  </tr>
</table>
</body>
</html>