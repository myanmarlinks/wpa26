<?php 
function load_view($page, $data = null) {
	$file = DD . "/app/view/" . $page . ".php";
	if(file_exists($file)) {
		ob_start();
		if($data != null) {
			extract($data);
		}
		require $file;
		ob_end_flush();
	} else {
		trigger_error("View ဖိုင္ထည့္ရမယ္ကြ ေခြသား", E_USER_ERROR);
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