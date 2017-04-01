<?php 
$students = DB::table("stocks")->get();
class DB extends PDO {
	private $_table_name;

	public function __construct() {
		$dsn = 'mysql:dbname=wpa26;host=127.0.0.1';
		$user = 'root';
		$password = '';
		parent::__construct($dsn, $user, $password);
	}
	private static $_instance;
	public static function table(string $table_name) {
		if(!self::$_instance instanceof DB) {
			self::$_instance = new DB();
		}
		self::$_instance->_table_name = $table_name;
		return self::$_instance;
	}

	public function get() {
		$sql = "SELECT * FROM " . $this->_table_name;
		var_dump($sql);
	}
}



 ?>