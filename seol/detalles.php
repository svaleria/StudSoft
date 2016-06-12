<?php
session_start();
if(!isset($_SESSION['unm']) || !isset($_SESSION['psw']))
{
header("location:error.php");
}
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script>
    function f2()
	{
	var v1=document.getElementById("fnm").value;
	if(v1.length<=2)
	{
		document.getElementById("fn").innerHTML="NECESITA 3 CARACTERES MINIMAMENTE";
	}
	else
	{
	document.getElementById("fn").innerHTML="";	
	}
	}
	function f3()
{
	var v2=document.getElementById("lnm").value;
	if(v2.length<=2)
	{
		document.getElementById("ln").innerHTML="NECESITA 3 CARACTERES MINIMAMENTE";
	}
	else
	{
	document.getElementById("ln").innerHTML="";	
	}
}
function f4()
{
	var v2=document.getElementById("mob").value;
	if(v2.length!=10)
	{
		document.getElementById("mb").innerHTML="NUMERO DE CELULAR INVALIDO";
	}
	else
	{
	document.getElementById("mb").innerHTML="";	
	}
}
function f5()
{
	var v2=document.getElementById("addr").value;
	if(v2.length<=7)
	{
		document.getElementById("ad").innerHTML="ADDRESS INVALID";
	
	}
	else
	{
	document.getElementById("ad").innerHTML="";
	
	}
}

    </script>

</head>

<body>
<div class="container">
<div class="page-header">
  <h1>-- <small>Seol</small></h1>
</div>
<div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>HECHO!</strong> Tus detalles han sido verificados.<strong>CLICK EN EL LINK</strong>
</div>

<!-- Button trigger modal -->
<center><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Enviar Detalles
</button><br /><br />
<?php
	  if(isset($_GET['sms']))
	  {
	  echo '<div class="alert alert-warning alert-danger">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Warning!</strong> Los detalles no son apropiados.
</div>';}
if(isset($_GET['smsxx']))
	  {
	  echo '<div class="alert alert-danger alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Algo!</strong>Missing.
</div>';}
	  ?>
</center>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Hola!! Usuario, tus detalles aqui..... </h4>
      </div>
      
      <div class="modal-body">
      <form action="loginp4.php" method="post" enctype="multipart/form-data" id="fm">
      
      <span>
<span class="label label-primary" style="float:left">Nombre</span><span class="label label-danger" id="fn" style="float:right"></span></span></br>
<div class="input-lg">
  
  <input type="text" class="form-control" name="fnm" id="fnm" onchange="f2()" />
</div>

</br>      <span>
<span class="label label-primary" style="float:left">Apellido</span><span class="label label-danger" id="ln" style="float:right"></span></span></br>

<div class="input-lg">
  
  <input type="text" class="form-control" name="lnm" id="lnm" onchange="f3()"/>
</div>
</br><span class="label label-primary">Genero</span></br>
<div class="input-lg">
    <select class="form-control" name="gender"><option value="male">Masculino</option><option value="female">Femenino</option></select>
  </div>
  </br><span class="label label-primary">Fecha Nacimiento</span></br>
  <div class="input-lg">
<input type="date" class="form-control" name="date" />
   </div>

  <div class="input-lg">
<select class="form-control" name="city">
<?php 
include("db_connect.php");
$u=mysql_query("SELECT ct_name FROM city");
while($row = mysql_fetch_array($u))
{
echo '<option value="'.$row[0].'">'.$row[0].'</option>';
}
?>
</select>
</div>
</br><span>
<span class="label label-primary" style="float:left">Celular</span><span class="label label-danger" id="mb" style="float:right"></span></span></br>
<div class="input-lg">
<input type='tel' pattern="[0-9]{10,10}" class="form-control search" name="mob" autocomplete="off" maxlength="10" id="mob" required onchange="f4()" />
</div>
</br>
<span>
<span class="label label-primary" style="float:left">Direccion</span><span class="label label-danger" id="ad" style="float:right"></span></span></br>
<div class="input-lg">
<input type="text" class="form-control" name="addr" id="addr" onchange="f5()" />
</div></br>
<span class="label label-primary">Imagen</span></br>
<div class="input-lg">
<input type="file" id="exampleInputFile" name="file"/>
</div>
<input type="hidden" value="<?php echo $_GET['unm'];?>" name="unm"/>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Save changes" />
      </div>
</form>
     
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
</body>
</html>