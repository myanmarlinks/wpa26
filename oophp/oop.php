<?php 
/*
abstract class - need to extend!
*/
abstract class Animal {
	public $name;


	/**
	 * Class Constructor
	 * @param    $name   
	 */
	public function __construct($name)
	{
		$this->name = $name;
	}
	/*
	...$thing scalar type declaration 
	:string return type declaration
	*/
	public function eat(...$thing) :string {
		var_dump($thing);
		return "YAY!";
	}
}
// $animal = new Animal("Aung Net");
// $animal->eat("Shoe", "Rice", "Meat");

// Contract
interface DogInterface {
	public function dance();
}

class Dog extends Animal implements DogInterface {
	
	public function __construct(string $name) {
		parent::__construct($name);
	}

	public function dance() {
		echo "DANCE!";
	}

	public function bark() {
		echo "WOOF!";
	}
}
$dog = new Dog("Aung Net");
$dog->eat("Shoe", "Meat");
$dog->bark();

 ?>