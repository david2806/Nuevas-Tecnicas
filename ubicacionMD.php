<?php        
    class ubicacionMD{
        var $zona;
	var $bloque;
        var $fila;
        var $puesto;		
        function setZona($zona){
            $this->zona=$zona;
        }
        function setBloque($bloque){
            $this->bloque = $bloque;
        }
	function setFila($fila){
            $this->fila = $fila;
        }
	function setPuesto($puesto){
            $this->puesto = $puesto;
        }                    
        function getZona() {
		return $this->zona;
        }
        function getBloque() {
		return $this->bloque;
        }		
	function getFila() {
		return $this->fila;
        }		
	function getPuesto() {
		return $this->puesto;
        }
    }
 ?>
