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
  <h1>Crea un grupo</h1> 
</div>

<center>
<form action="registrarGrupo.php" method="get" enctype="multipart/form-data">
<div class="input-group input-group-lg">
  
  <input type="text" class="form-control" placeholder="Nombre de grupo" name="username"/>
</div>

<br> 

<input type="submit" class="btn btn-primary btn-lg"  value="Aceptar" />
   
</form>
</center>

</body>
</html>