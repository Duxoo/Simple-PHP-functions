<?php
	//базовый класс
	require_once("Logger.php");

	//есили поставить final class... то будет установлен запрет наследования
	class FileLoggerDebug extends Logger {
		public function __construct($fname) {
			//такой синтаксис используется для вызова методов базового класса
			//basename — Возвращает последний компонент имени из указанного пути
			parent::__construct(basename($fname), $fname);
		}
		public function debug($s, $level = 0) {
			//debug_backtrace — Выводит стек вызовов функций в массив
			$stack = debug_backtrace();
			$file = basename($stack[$level]['file']);
			$line = $stack[$level['line']];
			//метод базового класса
			$this->log("[at $file line $line] $s");
		}
	}