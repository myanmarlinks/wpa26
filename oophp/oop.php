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
// Trait Design Pattern
trait DogTrait {
	public $foo;
	public function bar() {
		$this->foo = "Hello Fool! <br />";
		echo "BAR! <br />";
	}
}

class Dog extends Animal implements DogInterface {
	use DogTrait;
	public function __construct(string $name) {
		parent::__construct($name);
	}
	public function dance() {
		echo "DANCE! <br />";
	}
	public function bark() {
		echo "WOOF! <br />";
	}
}
$dog = new Dog("Aung Net");
$dog->eat("Shoe", "Meat");
$dog->bark();
$dog->bar();
echo $dog->foo;

/*
Cat Object 
extends Animal
create interface for CatInterface with sleep
create a CatTrait with google function
use CatTrait
*/

















 ?>