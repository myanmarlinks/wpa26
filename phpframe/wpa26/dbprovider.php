<?php 
	function _db_get_select($table_name, $columns) {

}

function _db_delete_id($table_name, $id) {

}

function _db_get_all($table_name) {
	$servername = _c("database.server_name");
	$username = _c("database.username");
	$password = _c("database.password");
	$dbname = _c("database.db_name");

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	// echo "Connected successfully";

	$sql = "SELECT * FROM " . $table_name;
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
    	$fetch_data = mysqli_fetch_all($result, MYSQLI_ASSOC);
	} else {
		$fetch_data = [];
	}
	mysqli_free_result($result);

	mysqli_close($conn);
	return $fetch_data;
}

 ?>
