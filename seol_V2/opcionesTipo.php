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
  <h1>AÑADIR OPCIONES</h1>
  <p>
  Opciones para esta pregunta:</p>
 </div>

<form action="crearPreg.php" method="get">
<table>

  <tr>
    <td><label for="opcion"></label>
    <input type="text" name="opcion" id="opcion" /></td>
    <td><a href="eliminar.php"><img src="images/eliminar.jpg" width="39" height="37" alt="quitar" /></a></td>
  </tr>
  <tr>
    <td><label for="opcion"></label>
    <input type="text" name="opcion" id="opcion" /></td>
    <td><a href="eliminar.php"><img src="images/eliminar.jpg" width="39" height="37" alt="quitar" /></a></td>
  </tr>
  <tr>
    <td><label for="opcion"></label>
    <input type="text" name="opcion" id="opcion" /></td>
    <td><a href="eliminar.php"><img src="images/eliminar.jpg" width="39" height="37" alt="quitar" /></a></td>
  </tr>
  <tr>
    
    <td><a href="nuevaOpcion.php">Nueva Opción</a> </td>

  </tr>
</table>
<input type="submit" name="Enviar" id="Enviar" value="Terminar" />
</form>
</body>
</html>