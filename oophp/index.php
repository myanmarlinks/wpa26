<?php 

class Dog {
	// properties
	public $name; 
	public $color;

	// methods
	public function bark() {
		echo "BARK! <br />";
	}
	public function eat() {
		echo "EAT! <br />";
	}

	public function __construct() {
		echo "CLASS Construct! <br />";
	}

	public function __destruct() {
		echo "CLASS Destroy! <br />";
	}
}

$dog = new Dog;
$dog->name = "Aung Net"; 
echo $dog->name . "<br />";
$dog->bark();


$dogOne = new Dog;
$dogOne->name = "Bo Bo";
echo $dogOne->name . "<br />";
$dogOne->bark();


$dogTwo = new Dog;
$dogTwo->name = "Bo Bo";
echo $dogTwo->name . "<br />";
$dogTwo->bark();

?>