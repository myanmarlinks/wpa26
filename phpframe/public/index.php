<?php 

define("DD", realpath( __DIR__ . "/.."));

require DD . "/wpa26/functions.php";
require DD . "/app/controller/controllers.php";

$request_uri = explode("/", $_SERVER['REQUEST_URI']);
$script_name = explode("/", $_SERVER['SCRIPT_NAME']);
$uri = array_values(array_diff($request_uri, $script_name));

if(empty($uri)) {
	$controller = "HomeController";
} else {
	$controller = ucfirst($uri[0]) . "Controller";
}

if(function_exists($controller)) {
	call_user_func($controller);
} else {
	echo "404 Error!";
}

// if(empty($uri[0])) {
// 	$page = "home";
// } else {
// 	$page = $uri[0];
// }



// load_view($page);
?>