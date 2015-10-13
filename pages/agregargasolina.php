<?php 

include('../Clases/Auto.php');
$auto = new Auto('?','?','?',$_POST['cant_actual']);

echo $auto->llenarTanque($_POST['cant_nueva']);
?>	