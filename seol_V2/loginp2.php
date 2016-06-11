<!DOCTYPE html PUBLIC>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">

<?php
if(isset($_GET['sms']))
{
echo '<div class="page-header">
  <h1>Just few hours<small>Then it all yours.</small></h1>
</div><div class="alert alert-info alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>FELICITACIONES!</strong>
  </br><strong>Atte: el sistema</strong> 
</div>';	


}
if(isset($_GET['sms1']))
{
echo '<div class="page-header">
  <h1>Verification<small>Mensaje uno.</small></h1>
</div><div class="alert alert-info alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>FELICITACIONES!</strong>Tus detalles han sido verificados.</br>
  </br><strong></strong> 
</div>';	


}
echo '<center></br></br>
<a href="home.php" class="btn btn-primary btn-lg active" role="button">IR A HOME.</a>
</center>';
?>


</div>
</body>
</html>