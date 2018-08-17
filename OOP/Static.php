<?php
 class Counter {
 	//скрытый статический член класса - общий для всех объектов
 	private static $count = 0;
 	public function __construct() {
 		//синтаксис доступа к статическим переменным класса
 		self::$count++;
 	}
 	public function __destruct() {
 		return self::$count--;
 	}
 	public function getCount() {
 		return self::$count;
 	}
 }

 for( $objs = [], $i = 0; $i< 6; $i++)  {
 	$objs[] = new Counter();
 }
 echo "Сейчас существует {$objs[0]->getCount()} объектов .<br>";
 $objs[5] = null;
 echo "Сейчас существует {$objs[0]->getCount()} объектов .<br>";