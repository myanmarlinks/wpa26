<?php 

function HomeController() {
	load_view("home");
}

function BlogController() {

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "wpa26";


	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully";

	$sql = "SELECT * FROM stocks";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
    	$fetch_data = mysqli_fetch_all($result, MYSQLI_ASSOC);
	} else {
		$fetch_data = [];
	}
	mysqli_free_result($result);

	mysqli_close($conn);


	$data = [
		'title'	=> 'Myanmar Links',
		'another_title' => "One-Stop Knowledge Provider!",
		'test'	=> 'Another Test!',
		'stocks'	=> $fetch_data
	];
	load_view("blog", $data);
}

function PageController() {
	load_view("tutu");
}







?>