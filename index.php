<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="/auto/asset/css/bootstrap.min.css">
<script  type="text/javascript"  src="/auto/asset/js/scripts.js"></script>
<link rel="shortcut icon" type="image/x-icon" href="/auto/asset/img/eclipse.png">
<title>Ingreso de Información</title>
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-md-4">
</div>
<div class="col-md-4">
<h1 class="text-center">Ingresar la información del Automovil</h1>

<form action="pages/validacion.php" method="POST">

<div class="form-group">
<label for="">MARCA:</label>
<input type="text" name="marca" class="form-control" autofocus onchange="conMayusculas(this);">
</div>
<div class="form-group">
<label for="">COLOR:</label>
<input type="text" name="color" class="form-control" onchange="conMayusculas(this);">
</div>
<div class="form-group">
<label for="">NÚMERO DE PUERTAS:</label>
<input type="number" name="puertas" min=0 max="5" class="form-control">
</div>
<div class="form-group">
<label for="">CANTIDAD DE GASOLINA INCIAL:</label>
<input type="number" name="gasolina" step="any" min=0 max="100" class="form-control" value="100">
</div>
<div class="form-group">
<button  type="submit" class="btn btn-primary btn-block btn-lg">INGRESAR INFORMACIÓN</button>
</div>
</form>

</div>
</div>
</div>
</body>
</html>