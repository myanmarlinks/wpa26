<?php 

define("DD", realpath( __DIR__ . "/.."));
require DD . "/vendor/autoload.php";

use Wpa26\App\Application as AppApp;
use Wpa26\Core\Application as CoreApp;

$app = new AppApp();
$another = new CoreApp();





// $stocks = DB::table("stocks")->get();
// $stocks = DB::table("stocks")->select(['name'])->get();
// $categories = DB::table("categories")->get();
// $stock_id = DB::table("stocks")->deleteById(2);
// $stock_id = DB::table("stocks")->delete(["name" => 'iPad Mini', "id" => 5]);
// var_dump($stock_id);
// var_dump($categories);
// var_dump($categories);


