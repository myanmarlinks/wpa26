<?php 

define("DD", realpath( __DIR__ . "/.."));
require DD . "/vendor/autoload.php";

$stocks = DB::table("stocks")->get();
$categories = DB::table("categories")->get();
var_dump($stocks[0]['name']);
// var_dump($categories);


