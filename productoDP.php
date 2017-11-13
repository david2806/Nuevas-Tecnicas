<?php        
    class productoDP{
        var $codigo;
        var $tipo;
	var $nombre;
        var $precio;				
        function setCodigo($codigo){
            $this->codigo=$codigo;
        }		
	function setTipo($tipo){
            $this->tipo = $tipo;
        }
	function setNombre($nombre){
            $this->nombre=$nombre;
        }         
	function setPrecio($precio){
            $this->precio = $precio;
        }		
	function getCodigo() {
		return $this->codigo;
        }		
	function getTipo() {
		return $this->tipo;
        }		
        function getNombre() {
		return $this->nombre;
        }        
	function getPrecio() {
		return $this->precio;
        }
    }
 ?>
