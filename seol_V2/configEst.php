<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">


<ul class="nav nav-pills">  
  <li class="active"><a href="profesor.php">Profesor</a></li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrar<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="ver.php">Grupos</a></li>
          <li><a href="ver.php">Lista de Estudiantes</a></li>
          <li><a href="signout.php">Log Out</a></li>
        </ul>
  </li>
</ul><br /><br />
<?php
if(isset($_GET['sms']))
{
echo '<div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Verification!</strong> Done.
</div>';}?>
<div class="jumbotron">
  <h1>Modifica tus datos de estudiante</h1> 
</div>

<center>
<form action="registrarGrupo.php" method="get" enctype="multipart/form-data">

<table width="348">
    <tr>
      <td width="160">Nombre</td>
      <td width="172"><input type="text" name="pregunta9" id="pregunta9" /></td>
    </tr>
    <tr>
      <td>Ap. Paterno</td>
      <td><input type="text" name="pregunta10" id="pregunta10" /></td>
    </tr>
    <tr>
      <td>Ap. Materno</td>
      <td><input type="text" name="pregunta11" id="pregunta11" /></td>
    </tr>
    <tr>
      <td>Alias</td>
      <td><input type="text" name="pregunta12" id="pregunta12" /></td>
    </tr>
    <tr>
      <td>Genero</td>
      <td><input type="text" name="pregunta13" id="pregunta13" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input type="text" name="pregunta14" id="pregunta14" /></td>
    </tr>
    <tr>
      <td>Fecha de nacimiento</td>
      <td><input type="text" name="pregunta15" id="pregunta15" /></td>
    </tr>
    <tr>
      <td>Dirección</td>
      <td><input type="text" name="pregunta16" id="pregunta16" /></td>
    </tr>
  </table>
  <p>
<p>
  <p>
<input type="submit" class="btn btn-primary btn-lg"  value="Modificar" />
   
</form>
</center>

</body>
</html>