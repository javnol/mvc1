<?php
	// Modelo.php 
	class Modelo {
		public $a, $b, $c;	// se asume que la suma de los 3 es 100%
		public $anga, $angb, $angc;
		public function __construct($a, $b, $c){
			$this->a = $a;
			$this->b = $b;
			$this->c = $c;
			$this->calcularAngulos();
		}
		private function calcularAngulos(){
			// a + b + c = 360 grados = 100 %
			// Regla de 3 para hallar el valor de a:
			// a+b+c ---- 360
			// a     ----  x
			// x = a(360) / (a+b+c)
			// p.e. a = 50%, b=30% y c=20%, -> el valor de a en grados es:
			// x = 50%(360) / (50%+30%+20%) 
			// x = 50%(360) / 100% = 5(36) = 180 grados.
			// el valor en grados de b es: 3(36) = 108 grados 
			// el valor en grados de c es: 2(36) =  72 grados 
			$this->anga = $this->a * 360 / ($this->a+$this->b+$this->c);
			$this->angb = $this->b * 360 / ($this->a+$this->b+$this->c);
			$this->angc = $this->c * 360 / ($this->a+$this->b+$this->c);
		}
	}
?>