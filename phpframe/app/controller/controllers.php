<?php 

function HomeController() {
	load_view("home");
}

function BlogController() {
	$data = [
		'title'	=> 'Myanmar Links',
		'another_title' => "One-Stop Knowledge Provider!",
		'test'	=> 'Another Test!'
	];
	load_view("blog", $data);
}

function PageController() {
	load_view("tutu");
}







?>