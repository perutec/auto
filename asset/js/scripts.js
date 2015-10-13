
/*Script convertir en Mayusculas*/
function conMayusculas(field) {
field.value         = field.value.toUpperCase()
}


function agregarGasolina(cant_actual, cant_nueva){
        var parametros = {
                "cant_actual" : cant_actual,
                "cant_nueva" : cant_nueva
        };
        $.ajax({
                data:  parametros,
                url:   '../pages/agregargasolina.php',
                type:  'post',
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#resultado").html(response);
                }
        });
}


function calcularRendimiento(kminicial, kmrecorrido,gasolina){
        var parametros = {
                "kminicial" : kminicial,
                "kmrecorrido" : kmrecorrido,
                "gasolina" : gasolina
               
        };
        $.ajax({
                data:  parametros,
                url:   '../pages/calcularrendimiento.php',
                type:  'post',
                beforeSend: function () {
                        $("#resultado1").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#resultado1").html(response);
                }
        });
}