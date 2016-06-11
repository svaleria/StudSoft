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
  Selecciona las estudiantes a quienes mandarás este examen:</p>
</div>

<form action="habEst.php" method="get">
  <p>
    <input name="Reynaldo Soria" type="checkbox" value="" /> 
    Reynaldo Soria
  </p>
  <p>
    <input name="Julian Quispe" type="checkbox" value="" />
Julian Quispe</p>
  <p>
    <input name="Leopoldo Facha" type="checkbox" value="" />
Leopoldo Facha </p>
  <p>
    <input name="Mario Aguirre" type="checkbox" value="" />
Mario Aguirre </p>
  <p>
    <input name="Wilson Mamani" type="checkbox" value="" />
Wilson Mamani </p>
  <p>
    <p>
      <p>
    <input type="submit" name="Enviar" id="Enviar" value="Enviar" />
  </p>
</form>


</body>
</html>