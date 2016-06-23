<?php
	include "resource.php";
	
	class exersise extends resource{

		 
		private $level;

		function __construct()
		{
		}
		function get_level(){
			return $this->level;
		}
		function set_level($level){
			$this->level=$level;
		}
	}


?>