<?php
	// Singleton only allows creation of one instance of the class regardless of how many class declarations
	
	class Singleton{

		private static $instance;

		public static function getInstance(){
			/*Normal method*/
			// self::instance = new Singleton();

			/*Lazy loading method*/
			if(!self::$instance instanceof Singleton)
				self::$instance = new Singleton();

			return self::$instance;
		}

		private function __construct(){}
	}


$obj = Singleton::getInstance();
$obj2 = Singleton::getInstance();

var_dump($obj);
var_dump($obj2);


//OUTPUTS:
//object(Singleton)#1 (0) { }
//object(Singleton)#1 (0) { }
//Notice that the variables $obj and $obj2 uses the same instance #1 of class Singleton