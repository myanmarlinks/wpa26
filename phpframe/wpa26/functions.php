<?php 
function load_view($page) {
	$file = DD . "/app/view/" . $page . ".php";
	if(file_exists($file)) {
		require $file;
	} else {
		echo "404 File Not Found, Idiot!";
	}
}
/**
* to dump value and die when it is true
*/

function dump($value, $die = false) {
	var_dump($value);
	if($die == true) {
		die();
	}
}
 ?>