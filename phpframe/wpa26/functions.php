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
		trigger_error(_lang('developer.view_file_not_found'), E_USER_ERROR);
	}
}
/**
* to dump value and die when it is true
*/

function _lang($message) {
	$folder = _c("app.locale");
	$e_message = explode(".", $message);
	$file = DD . "/wpa26/lang/" . $folder . "/" . $e_message[0] . ".php";
	if(file_exists($file)) {
		$lang_data = require $file;
		if(array_key_exists($e_message[1], $lang_data)) {
			return $lang_data[$e_message[1]];

		} else {
			trigger_error("Lang key not found!", E_USER_ERROR);
		}
	} else {
		trigger_error("Lang File Not Found!", E_USER_ERROR);
	}
}

function _c($value) {
	$e_value = explode(".", $value);
	$config_file = DD . "/app/config/" . $e_value[0] . ".php";
	if(file_exists($config_file)) {
		$config_data = require $config_file;
		if(array_key_exists($e_value[1], $config_data)) {
			return $config_data[$e_value[1]];	
		} else {
			trigger_error("Config Key Not Found!", E_USER_ERROR);
		}
		
	} else {
		trigger_error("Config file not found!", E_USER_ERROR);
	}
}


 
function dump($value, $die = false) {
	var_dump($value);
	if($die == true) {
		die();
	}
}


 ?>