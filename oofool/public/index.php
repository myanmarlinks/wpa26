<?php 
$stocks = DB::table("stocks")->get();
$categories = DB::table("categories")->get();
var_dump($stocks);
var_dump($categories);

class DB extends PDO
{
    private $_table_name;

    public function __construct()
    {
        var_dump("DB Object Created!");
        $dsn = 'mysql:dbname=wpa26;host=127.0.0.1';
        $user = 'root';
        $password = '';
        parent::__construct($dsn, $user, $password);
    }

    public function __destruct()
    {
        var_dump("DB Object Destroyed!");
    }
    private static $_instance;
    public static function table(string $table_name)
    {
        if (!self::$_instance instanceof DB) {
            self::$_instance = new DB();
        }
        self::$_instance->_table_name = $table_name;
        return self::$_instance;
    }

    public function get()
    {
        $sql = "SELECT * FROM " . $this->_table_name;
        $result = $this->query($sql);
        return $result->fetchAll();
    }
}
