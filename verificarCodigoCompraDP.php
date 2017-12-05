<?php
	class verificarCodigoCompraDP
	{
		var $codigo;
		var $verificar;
		
		funtion setCodigo($codigo){
			$this->codigo=$codigo;
		}
		function getCodigo(){
			return $this->codigo;
		}
		funtion setVerificar($verificar){
			$this->verificar=$verificar;
		}
		function getVerificar(){
			return $this->verificar;
		}
	}
?>