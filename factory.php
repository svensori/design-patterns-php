<?php 
	
	interface Actions{
		public function sayName();
	}

	class Person1 implements Actions{
		public function sayName(){
			echo "I am Person1.";
		}
	}
	class Person2 implements Actions{
		public function sayName(){
			echo "I am Person2.";
		}
	}

	class PersonFactory {
		public function createPerson($person){
			switch ($person) {
				case 'Person1':
					return new Person1();
					break;
				
				case 'Person2':
					return new Person2();
					break;
			}
		}
	}


	$factory = new PersonFactory();
	$person1 = $factory->createPerson('Person1');
	$person2 = $factory->createPerson('Person2');
	$person1->sayName();
	$person2->sayName();

	// OUTPUTS
	// I am Person1.I am Person2.