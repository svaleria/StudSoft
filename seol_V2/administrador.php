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
  <h1>Hola, Administrador!</h1>
  <p>Felicitaciones, ingresaste al sistema.</p>
  <p>Tienes las siguentes opciones:</p> 
</div>

<form action="habEst.php" method="get">
  <p>
    <label for="pregunta"></label>
    <input type="text" name="pregunta" id="pregunta" />
    <input type="submit" name="Buscar" id="Buscar" value="Buscar" />
  </p>
</form>

<div class="jumbotron">
 <p><a href="gruposAdm.php">- Grupos</a>
 <p><a href="usuariosAdm.php">- Usuarios</a>
</div>



</body>
</html>