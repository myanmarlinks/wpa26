<?php 

function HomeController() {
	load_view("home");
}

function BlogController() {
	$data = [
		'title'	=> 'Myanmar Links',
		'another_title' => "One-Stop Knowledge Provider!",
		'test'	=> 'Another Test!',
		'stocks'	=> _db_get_all("stocks")
	];
	load_view("blog", $data);
}

function PageController() {
	_db_delete_id("stocks", 1);
	$data = [
		'categories'	=> _db_get_select("categories", ['name'])
	];
	load_view("tutu", $data);
}







?>