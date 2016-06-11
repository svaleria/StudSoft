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
  <h1>Docentes registrados en el sistema</h1>
  <p>
  Selecciona el docente que estará acargo de este grupo:</p>
</div>

<form action="habEst.php" method="get">
  <p>
    <input name="Wilfredo Vargas" type="radio" value="" /> 
    Wilfredo Vargas
  </p>
  <p>
    <input name="Cecilio Mendez" type="radio" value="" />
Cecilio Mendez</p>
  <p>
    <input name="Fabricio Mota" type="radio" value="" />
Fabricio Mota </p>
  <p>
    <input name="Hiliaron Daza" type="radio" value="" />
Hiliaron Daza </p>
  <p>
    <input name="Filemón Gutierrez" type="radio" value="" />
Filemón Gutierrez </p>
  <p>
    <p>
      <p>
    <input type="submit" name="Enviar" id="Enviar" value="Enviar" />
  </p>
</form>


</body>
</html>