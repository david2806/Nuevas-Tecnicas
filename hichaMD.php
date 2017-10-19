<?php
        
    class hinchaMD
    {
        var $nombre;
        var $genero;
        var $tipoPersona;
		
        function setNombre($nombre)
		{
            $this->nombre=$nombre;
        }
        function setGenero($genero) 
        {
            $this->genero = $genero;
        }
		function setTipoPersona($tipoPersona) 
        {
            $this->tipoPersona = $tipoPersona;
        }                    
        function getNombre() {
			return $this->nombre;
        }
        function getGenero() {
        return $this->genero;
        }
		function getTipoPersona() {
			return $this->tipoPersona;
        }
    }
 ?>
