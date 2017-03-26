<?php 
class Foo {
	private $data = [];
	public function bar() {
		echo "TEST! <br />";
	}

	// property late binding
	public function __set($key, $value) {
		$this->data[$key] = $value;
		var_dump($this->data);
	}
	public function __get($key) {
		if(array_key_exists($key, $this->data)) {
			return $this->data[$key];
		} else {
			trigger_error("Property does not found!", E_USER_ERROR);
		}
	}
	// late loading
	public function __call($name, $value) {
		var_dump($name);
		var_dump($value);
	}
}

$test = new Foo;
$test->bar();
// late binding
$test->woo = "Hello Woo";
echo $test->woo;
// late loading
$test->bark("1000", "far");
// Static Method
class Goo {	
	static private $too = "Too";
	static public function moo() {
		echo "MOO <br />";
	}
	static public function __callStatic($name, $value) {
		echo static::$too;
		var_dump($name);
		var_dump($value);
	}
}
// Scope Resolution Operator
Goo::moo();
// late loading
Goo::roo("Test", "Another");

$arr = [
	[
		'id'	=> 1,
		'name'	=> "Aung Aung",
	],
	[
		'id'	=> 2,
		'name'	=> "Baung Naung",
	]
];
$je_arr = json_encode($arr);
echo $je_arr;
echo "<br />";
var_dump(json_decode($je_arr));
$se_arr = serialize($arr);
echo $se_arr . "<br />";
var_dump(unserialize($se_arr));











 ?>