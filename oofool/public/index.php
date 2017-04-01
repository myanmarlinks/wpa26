<?php 

$students = DB::table("students")->get();

class DB {
	private static $_instance;

	public static function table(string $table_name) {
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