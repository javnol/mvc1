<?php
	// Controlador.php
	class Controlador {
		public $modelo;
		public $vista;
		public function __construct($modelo, $vista){
			$this->modelo = $modelo;
			$this->vista = $vista;
		}
		public function exhibir(){
			$this->vista->dibujar($this->modelo);
		}
	}
?>