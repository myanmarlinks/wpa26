<?php 

define("DD", realpath( __DIR__ . "/.."));

require DD . "/wpa26/functions.php";

if(isset($_GET['page'])) {
	$page = htmlspecialchars($_GET['page']);
} else {
	$page = "home";
}

load_view($page);
?>