<?php
 class FileLogger {
 	public  $name;
 	private $f, $lines = [];
 	public function __construct($name) {
 		$this->name = $name;
 		$this->f = fopen('test.txt', "a+");
 	}
 	/*добавляет в журнал одну строку. она не попадает в файл сразу,
 	а накапливается в буфере до самого закрытия*/
 	public function log($str) {
 		$prefix = "[".date("Y-m-d_h:i:s ")."{$this->name}]";
 		/*preg_replace — Выполняет поиск и замену по регулярному выражению
 		rtrim — Удаляет пробелы (или другие символы) из конца строки*/
 		$str = preg_replace('/^/m', $prefix, rtrim($str));
 		$this->lines[] = $str."\n";
 	}
 	public function __destruct() {
 		/*fputs(fwrite) — Бинарно-безопасная запись в файл*/
 		fputs($this->f, join("", $this->lines));
 		fclose($this->f);
 	}
 }

$a = new FileLogger('test');
$a->log("Тестируем");