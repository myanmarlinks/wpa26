<?php 
$students = DB::table("stocks")->get();
class DB extends PDO {

	public function __construct() {
		$dsn = 'mysql:dbname=wpa26;host=127.0.0.1';
		$user = 'root';
		$password = '';
		parent::__construct($dsn, $user, $password);
	}

	private static $_instance;

	public static function table(  $table_name) {
		if(!self::$_instance instanceof DB) {
			self::$_instance = new DB();
		}
		return self::$_instance;
	}

	public function get() {
		echo "STUDENTS";
	}
}



 ?>