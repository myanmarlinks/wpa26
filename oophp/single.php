<?php 
// Singleton Pattern
class StaticChain  {
	public static $_instance;
	public function __construct() {
		echo "StaticChain Construct! <br />"; 
	}
	static public function getInstance() {
		var_dump(self::$_instance);
		if(!self::$_instance instanceof StaticChain) {
			echo "StaticChain Object Created! <br />";
			self::$_instance = new StaticChain();
		} 
		return self::$_instance;
	}
	public function eat() {
		echo "EAT <br />";
		return $this;
	}
	public function sleep() {
		echo "Sleep! <br />";
		return $this;
	}
	public function __destruct() {
		echo "StaticChain Destruct! <br />";
	}
}
StaticChain::getInstance()->eat();
StaticChain::getInstance()->eat()->sleep();
StaticChain::getInstance()->sleep();

?>