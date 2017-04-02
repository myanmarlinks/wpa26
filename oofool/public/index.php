<?php 

define("DD", realpath( __DIR__ . "/.."));
require DD . "/vendor/autoload.php";

$stocks = DB::table("stocks")->get();
$categories = DB::table("categories")->get();
var_dump($stocks);
var_dump($categories);
// var_dump($categories);


