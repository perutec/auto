<?php 

/**
* 
*/
class Auto 
{
protected $color;
protected $puertas;
protected $marca;
protected $gasolina;



function __construct($color,$puertas,$marca,$gasolina)
{
$this->color         =$color;
$this->puertas       =$puertas;
$this->marca         =$marca;
$this->gasolina      =$gasolina;
 }


 function mostrar($atributo)
 {
 	echo $this->$atributo;
 }


  function llenarTanque($gasolina_nueva){
      return 'Nueva Cantidad: '. $this->gasolina = $this->gasolina + $gasolina_nueva;
    }

}



?>