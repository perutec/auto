<?php 

//Evaluamos  si la variables obtenidas por POST estan vacias:
if (
empty($_POST['color'])     ||
empty($_POST['puertas'])   ||
empty($_POST['marca'])     ||
empty($_POST['gasolina'])  
) 

{
echo "<script>
alert('Debe  ingresar todos los  Datos');
window.location='/auto';
</script>";

}



//LLamamos  a la clase  Auto  y tambien a su metodo constructor y le pasamos la variable
include('../Clases/Auto.php');
$auto = new Auto($_POST['color'],$_POST['puertas'],$_POST['marca'],$_POST['gasolina']);

?>




<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/auto/asset/css/bootstrap.min.css">
<script  type="text/javascript"  src="/auto/asset/js/scripts.js"></script>
<script  type="text/javascript"  src="/auto/asset/js/jquery.js"></script>
<link rel="shortcut icon" type="image/x-icon" href="/auto/asset/img/eclipse.png">

<title>Validación</title>
</head>		
<body>

<div class="container-fluid">

<div class="row">

<div class="col-md-6">
<h1 class="text-primary">Detalle del Automóvil:</h1>
<ol>
<h2><li> Marca:    <?php $auto->mostrar('marca');    ?> </li></h2>
<h2><li> Color:    <?php $auto->mostrar('color');    ?> </li></h2>
<h2><li> Puertas:  <?php $auto->mostrar('puertas');  ?> </li></h2>
<h2><li> Cantidad Gasolina: <?php $auto->mostrar('gasolina'); ?> </li></h2>
</ol>
</div>

<div class="col-md-6">
 
<h2 class="text-primary">Agregar Gasolina</h2>
<div class="form-group">
<label for="">Cantidad de Gasolina Actual</label>
<input type="number" class="form-control" value="<?php $auto->mostrar('gasolina'); ?>" 
id="cant_actual" min="1"/> 
</div>

<div class="form-group">
<label for="">Cantidad</label>
<input type="text" class="form-control"  id="cant_nueva" min="1"/>
</div>

<div class="form-group">
<input type="button" href="javascript:;"  class="btn btn-success" 
onclick="agregarGasolina($('#cant_actual').val(), $('#cant_nueva').val());return false;" 
value="Agregar"/>
</div>

<div class="form-group">
 <h3><span id="resultado">0</span></h3>
</div>


<h2 class="text-primary">Calcular Rendimiento</h2>
<div class="form-group">
<label for="">Kilometraje Inicial</label>
<input type="number" class="form-control"  id="kminicial" min="1"/> 
</div>

<div class="form-group">	
<label for="">Kilomentraje Recorrido</label>
<input type="text" class="form-control"    id="kmrecorrido" min="1"/>
</div>

<div class="form-group">
<label for="">Gasolina</label>
<input type="text" class="form-control"    id="gasolina" min="1"/>
</div>

<div class="form-group">
<input type="button" href="javascript:;"  class="btn btn-success" 
onclick="calcularRendimiento($('#kminicial').val(), $('#kmrecorrido').val(),$('#gasolina').val());return false;" 
value="Calcular"/>
</div>

<div class="form-group">
 <h3><span id="resultado1">0</span></h3>
</div>	

</div>

</div>


</div>


</body>
</html>