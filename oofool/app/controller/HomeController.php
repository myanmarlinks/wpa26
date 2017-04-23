<?php 

use Wpa26\App\Application;

class HomeController {
	public function __construct() {
		echo "Home Controller Construct! <br />";
		$dog = Application::get("dog");
		$dog->bark();
		$cat = Application::get("cat");
		$cat->meow();
		Application::remove("dog");
		// $dog = Application::get("dog");
	}

	public function __destruct() {
		echo "Home Controller Destruct! <br />";
	}
}

 ?>