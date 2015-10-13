<?php 

include('../Clases/Kilometraje.php');
$km = new Kilometraje($_POST['kminicial'],$_POST['kmrecorrido'],$_POST['gasolina']);

echo $km->Rendimiento();
?>	