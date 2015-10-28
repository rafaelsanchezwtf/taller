<?php
	
	class profesor extends object_standard{
		protected $cedula;
		protected $nombre;
		protected $fecha;
		protected $lugar_de_nacimiento;
		protected $titulo;
		protected $departamento

		var $components = array();

		var $auxiliars = array();

		public function metadata(){
			return array("cedula" => array(), "nombre" => array(), "fecha" => array(), "lugar_de_nacimiento" => array(), "titulo" => array(), "departamento" => array()); 
		}

		public function primary_key(){
			return array("cedula");
		}

		public function relational_keys($class, $rel_name){
			switch ($class) {
				default:
				break;
			}
		}
	}

?>