<?php
 class User {
 	public $name, $password, $referrer, $time;
 	 public function __construct ($name, $password) {
 	 	$this->name = $name;
 	 	$this->password = $password;
 	 	/*PHP_SELF'
Имя файла скрипта, который сейчас выполняется, относительно корня документов*/
 	 	$this->referrer = $_SERVER['PHP_SELF'];
 	 	$this->time = time();
 	 }
 	 //указывает какие параметры будут подвергаться сериализации
 	 //метод __sleep вызывается перед сериализацией, выступает как фильтр
 	 public function __sleep() {
 	 	return['name', 'referrer', 'time'];
 	 }
 	 //метод __wakeup вызывается после восстановаления объекта
 	 //т.е сначала unserialize, а потом уже __wakeup
 	 public function __wakeup() {
 	 	$this->time = time();
 	 }
 }