<?php 

class DB extends PDO
{
    private $_table_name;
    public function __construct()
    {
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

    public function deleteById($id) {
        $sql = "DELETE FROM " . $this->_table_name . " WHERE id = :id";
        $prep = $this->prepare($sql);
        $prep->execute(["id" => $id]);

        return $prep->fetch();
    } 

    public function delete(array $data) {
        var_dump($data);
        $sql = "DELETE FROM " . $this->_table_name . " WHERE ";
        $value_array = [];
        foreach ($data as $key => $value) {
            $sql .= $key . "= :" . $key . " AND ";
            $value_array = [":".$key => $value];
        }
        $n_sql = rtrim($sql, " AND ");
        var_dump($n_sql);
        var_dump($value_array);
        die();
        $prep = $this->prepare($n_sql);
        $prep->execute($data);

        return $prep->fetch();
        
    }

    public function get()
    {
        $sql = "SELECT * FROM " . $this->_table_name;
        $result = $this->query($sql);
        return $result->fetchAll();
    }
}
 ?>