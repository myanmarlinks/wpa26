<?php 

define("DD", realpath( __DIR__ . "/.."));
require DD . "/vendor/autoload.php";

use Wpa26\App\Application;
use Wpa26\App\LogFactory;

class Dog {
	public function __construct() {
		echo "Dog Contructor! <br />";
	}
	public function bark() {
		echo "Bark! <br />";
	}
	public function __destruct() {
		echo "Dog Destruct! <br />";
	}
}

class Cat {
	public function __construct() {
		echo "Cat Contructor! <br />";
	}

	public function meow() {
		echo "Meow! <br />";
	}
	public function __destruct() {
		echo "Cat Destruct! <br />";
	}
}

// Application::add(new Dog());
// Application::add(new Cat());


// $home = new HomeController();

$log = new LogFactory();

$logFile = $log->getLog('file', ["test"]);
$logFile->write("test", "Hello World!");
$logMysql = $log->getLog("redis", ["test"]);
$logMysql->write("mysql", "Hello Redis");
$logFile = $log->getLog('file', ["test"]);
$logFile->write("test", "Hello World!");
$logMysql = $log->getLog("redis", ["test"]);
$logMysql->write("mysql", "Hello Redis");




// $stocks = DB::table("stocks")->get();
// $stocks = DB::table("stocks")->select(['name'])->get();
// $categories = DB::table("categories")->get();
// $stock_id = DB::table("stocks")->deleteById(2);
// $stock_id = DB::table("stocks")->delete(["name" => 'iPad Mini', "id" => 5]);
// var_dump($stock_id);
// var_dump($categories);
// var_dump($categories);


