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
  <h1>Hola, profesor  

<?php echo ''.$_SESSION['usuario'].''; 
$usuario =$_SESSION['usuario'];
?>

    !</h1>
  <p>
  felicitaciones, ingresaste al sistema.</p>
  <p>Ingresa a tus grupos o crea uno</p>

<tr>    <td>
  <a href="crearGrupo.php"><h2>Crear Grupo</h2></a>
</td>
</tr>

  
</div>

<table>

<p><div class="jumbotron">
<h2>Grupos:</h2>
</div>
</p>
  <tr>
    <td><div class="jumbotron">

<?php 

$resultado = mysqli_query($conectador, "select * from grupo where alias_us = '$usuario' ;");


 ?>

  <a href="panGrupo.php"><h2>- Matemáticas</h2></a>
</div></td>
    <td><a href=""><h2>Borrar</h2></a></td>
  </tr>
  <tr>
    <td><div class="jumbotron">
  <a href=""><h2>- Literatura</h2></a>
</div></td>
    <td><a href=""><h2>Borrar</h2></a></td>
  </tr>
</table>





</body>
</html>