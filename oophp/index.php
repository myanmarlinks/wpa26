<?php 

abstract class Animal {
	public $name;
	public function __construct($name) {
		$this->name = $name;
	}
	public function eat(string ...$thing) {
		var_dump($thing);
	}
	public function sleep() {
		echo "Sleep <br />";
	}
}
interface DogInterface {
	public function bark();
}
interface EatInterface {
	public function eat();
}
trait Foo {
	public $bar = "Google"; 
	public function test() {
		echo "Test <br />";
	}
}

class Dog extends Animal implements DogInterface, EatInterface {
	public $color;
	public $leg;	
	public function __construct($name, $color, $leg = 4) {
		parent::__construct($name);
	
		$this->color = $color;
		$this->leg = $leg;

		echo "CLASS Construct! <br />";
	}
	// Scalar Type Declaration (...$thing)
	// Return Type Declaration :String

	public function bark() {
		echo "BARK! <br />";
	}

	public function __destruct() {
		echo "DOG CLASS DESTROY! <br />";
	}
}
class Cat extends Animal {
	use Foo;
	public function __construct($name)
	{
		parent::__construct($name);
	}
	public function meow() {
		echo "Meow! <br />";
	}

	// method override
	public function sleep() {
		echo "Sound Sleep! <br />";
	}
	public function __destruct() {
		echo "CAT CLASS DESTROY! <br />";
	}
}
$dog = new Dog("Aung Net", "red", 3);
$dog->sleep();
$dog->eat("Meat", "Rice", "Chicken", 5, "Fish", 45);
$cat = new Cat("Mee Mee");
$cat->sleep();
$cat->test();
echo $cat->bar;
?>
