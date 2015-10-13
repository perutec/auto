<?php 

/**
* 
*/
class Kilometraje 
{
protected $kminicial;
protected $kmrecorrido;
protected $gasolina;


function __construct($kminicial,$kmrecorrido,$gasolina)
{
$this->kminicial         =$kminicial;
$this->kmrecorrido       =$kmrecorrido;
$this->gasolina          =$gasolina;

 }





  function Rendimiento(){
      return 'El rendimiento de su vehículo en este período de tiempo y recorrido fue  '.round((($this->kminicial+ $this->kmrecorrido)- $this->kminicial)/ $this->gasolina,3).' Km/l';
    }

}



?>