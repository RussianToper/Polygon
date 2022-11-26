<?php namespace App;
	include "MagicClass.php";
	$magic = new MagicClass;

	echo $magic;
	echo "<br>";
	
	$magic(1); // Метод __invoke() вызывается, когда скрипт пытается выполнить объект как функцию
	
	$magic_1 = clone $magic;

	var_dump(new MagicClass);

	$magic->pomogite('mne');

	MagicClass::helpMe('please');

	$magic->a = 1;

	echo $magic->a;

	var_dump(isset($magic->a));
	echo "<br>";

	unset($magic->a);

	$str_s = serialize($magic); // Если и __serialize(), и __sleep() определены в одном и том же объекте, будет вызван только метод __serialize(); __sleep() будет игнорироваться
	echo $str_s;
	echo "<br>";

	$str_u = unserialize($str_s); // Если и __unserialize(), и __wakeup() определены в одном и том же объекте, будет вызван только метод __unserialize(); __wakeup() будет игнорироваться

	$magic_2 = var_export($magic, true);
	var_dump($magic_2);
	echo "<br>";
?>