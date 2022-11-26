<?php namespace App;
	class MagicClass {
		public int $magic_level;

		function __construct() {
			$this->magic_level = 0;
			echo("__construct()");
			echo "<br>";
		}

		function __destruct() {
			echo "<br>";
			echo("Goodbye!");
			echo "<br>";
			echo("__destruct()");
			echo "<br>";
		}

		public function __toString() {
			$v = "__toString()";
			return $v;
		}

		public function __invoke($name) {
			echo("__invoke()");
			echo "<br>";
		}

		public function __clone() {
			echo("__clone()");
			echo "<br>";
		}

		public function __debugInfo() {
			return [
				'debugInfo' => '__debugInfo()',
			];
		}

		public function __call($name, $arguments) {
			echo "Вызов метода '$name' " . implode(', ', $arguments);
			echo "<br>";
			echo("__call()");
			echo "<br>";
		}

		public static function __callStatic($name, $arguments) {
			echo "Вызов статического метода '$name' " . implode(', ', $arguments);
			echo "<br>";
			echo("__callStatic()");
			echo "<br>";
		}

		public function __get($name) {
			echo("__get()");
			echo "<br>";
		}

		public function __set($name, $value) {
			echo("__set()");
			echo "<br>";
		}

		public function __isset($name) {
			echo("__isset()");
			echo "<br>";
			return "__isset()";
		}

		public function __unset($name) {
			echo("__unset()");
			echo "<br>";
		}

		public function __sleep() {
			return array('__sleep()');
		}

		public function __wakeup() {
			echo("__wakeup()");
			echo "<br>";
		}

		public function __serialize(): array {
			echo("__serialize()");
			echo "<br>";
			return [
				'serialize' => '__serialize()',
				'magic_level' => $this->magic_level,
			];
		}

		public function __unserialize(array $data): void {
			echo("__unserialize()");
			echo "<br>";
			$this->magic_level = $data['magic_level'];
		}

		public static function __set_state($an_array) {
			echo("__set_state()");
			echo "<br>";
			$obj = new MagicClass;
			return $obj;
		}
	}
?>