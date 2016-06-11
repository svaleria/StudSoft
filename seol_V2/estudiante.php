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
  <h1>Hola, estudiante!</h1>
  <p>
  felicitaciones, ingresaste al sistema.</p>
  <p>Ingresa a tus grupos</p>

 
</div>

<table>

<p><div class="jumbotron">
<h2>Grupos:</h2>
</div>
</p>
  <tr>
    <td><div class="jumbotron">
  <a href="panGrupoEst.php"><h2>- Matemáticas</h2></a>
</div></td>
  </tr>
  <tr>
    <td><div class="jumbotron">
  <a href=""><h2>- Alquimia</h2></a>
</div></td>
  </tr>
</table>





</body>
</html>