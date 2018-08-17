<?php
class FileLogger {
	//массив всех созданных объектов
	static public $loggers= [];
	//время создания объектов
	private $time;
	//закрытый конструктор, создание объектов извне запрещено
	private function __construct($fname) {
		/*microtime — Возвращает текущую метку времени Unix с микросекундами*/
		$this->time = microtime(true);
	}
	public static function create($fname) {
		/*существует ли объект для указанного имени файла, если да, то его и же возвращаем*/
		if(isset(self::$loggers[$fname]))
			return self::$loggers[$fname];
		return self::$loggers[$fname] = new self($fname);
	}
	public function getTime() {
		return $this->time;
	}
}
$logger1 = FileLogger::create('test.txt');
sleep(1);//sleep — Задержка выполнения
$logger2 = FileLogger::create('test.txt');
echo "{$logger1->getTime()}, {$logger2->getTime()}";