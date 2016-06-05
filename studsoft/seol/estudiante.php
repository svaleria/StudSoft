<?php
include("inhead.php");
?>
<br /><?php
if(isset($_GET['exsms']))
{
echo '<div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Exam Completed!</strong> Go to results to check your score.
</div>';}?>
<br />
<div class="jumbotron" >
  <h1>Hola, <?php echo $_SESSION['f1'];?>!</h1><br />
  <p align="justify">Felicitaciones, ingresaste al sistema de evaluaciones en linea.</p>
</div>
</div></div>
</body>
</html>