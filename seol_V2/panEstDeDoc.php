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
  <h1>Estudiantes del Grupo Matemáticas!</h1>
  <p>
  Estos son todos tus estudiantes:</p>
</div>

<table width="426" border="1">
  <tr>
    <td width="128">Nombre</td>
    <td width="136">Apellido</td>
    <td width="64">Edad</td>
    <td width="31">Quitar</td>
    <td width="33">Detalle</td>
  </tr>
  <tr>
    <td>Fermin</td>
    <td>Arispe</td>
    <td>45</td>
    <td><a href="eliminar.php"><img src="images/eliminar.jpg" width="39" height="37" alt="quitar" /></a></td>
    <td><a href="buscar.php"><img src="images/buscar.jpg" width="39" height="37" alt="buscar" /></a></td>
  </tr>
  <tr>
    <td>Julian</td>
    <td>Coronado</td>
    <td>34</td>
    <td><img src="images/eliminar.jpg" width="39" height="37" alt="quitar" /></td>
    <td><img src="images/buscar.jpg" width="39" height="37" alt="quitar" /></td>
  </tr>
  <tr>
    <td>Rimer</td>
    <td>Gauzan</td>
    <td>23</td>
    <td><img src="images/eliminar.jpg" width="39" height="37" alt="quitar" /></td>
    <td><img src="images/buscar.jpg" width="39" height="37" alt="quitar" /></td>
  </tr>
</table>

</body>
</html>