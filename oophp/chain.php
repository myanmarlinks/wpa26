<?php 
class Dog {
	public function __construct() {
		echo "Dog Construct! <br />";
	}
	public function wakeup() {
		echo "Wake Up! <br />";
		return $this;
	}
	public function roundUp() {
		echo "Round Up! <br />";
		return $this;
	}
	public function findFood() {
		echo "Find Food! <br />";
		return $this;
	}
	public function __destruct() {
		echo "Dog Destruct! <br />";
		return $this;
	}
} 
$dog = new Dog();
$dog->wakeup();
// method chain
$dog->wakeup()->findFood();
$dog->wakeup()->roundUp()->findFood();

 ?>

