<?php 
	interface Output{
		public function print();
	}

	class Uppercase implements Output{
		private $string;
		public function __construct($string){
			$this->string = $string;
		}
		public function print(){
			return strtoupper($this->string);
		}
	}

	class Capitalize implements Output{
		private $string;
		public function __construct($string){
			$this->string = $string;
		}
		public function print(){
			return ucwords($this->string);
		}
	}

	// For example we have a function that parses string 
	// depending on the input.
	function transformString($type, $string){
		switch ($type) {
			case 'name':
				$capitalize = new Capitalize($string);
				return $capitalize->print();
				break;
			
			case 'role':
				$uppercase = new Uppercase($string);
				return $uppercase->print();
				break;
		}
	}

	//Example we need to make the string categorized as name to be Capitalized
	//and the role should be in all uppercase
	$string = 'steven';
	$string2 = 'system admin';

	echo transformString('name', $string);
	echo transformString('role', $string2);