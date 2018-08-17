<?php
 class Hooker {
 	public $opened = 'opened';
 	public function method() {
 		echo "Whoa, deja vu.<br>";
 	}
 	//в этом массиве хранится "виртуальные" свойства
 	public $vars = array();
 	//перехват получения значения свойства
 	public function __get($name) {
 		echo "Перехват: получаем значение $name.<br>";
 		// возвращаем null, если "виртуальное" свойство не определено
 		return isset($this->vars[$name]) ? $this->vars[$name] : null;
 	}
 	//перехват установки значения свойства
 	public function __set($name, $value) {
 		echo "Перехват: устанавливаем значение $name равным $value.<br>";
 		/*trim — Удаляет пробелы (или другие символы) из начала и конца строки*/
 		return $this->vars[$name] = trim($value);
 	}
 	//перехват вызова несуществующего метода
 	public function __call($name, $args) {
 		echo "Перехват: вызываем $name с аргументами: ";
 		/*var_dump — Выводит информацию о переменной*/
 		var_dump($args);
 		return $args[0];
 	}
 	//функция clone нужна для того, чтобы создать независимую копию объекта
 	//если ее объявить как приватную, то клонирование будет невозможным
 	private function __clone() {
 		return 0;
 	}
 }
 $obj = new Hooker();
 echo "<b> Получаем значение обычного свойства:</b><br>";
 echo "Значение: {$obj->opened} <br>";
 echo "<b>Вызываем обычный метод:</b><br>";
 $obj->method();
 echo "<b> Присваивание несуществующему свойству:</b><br>";
 $obj->closed = true;
  echo "<b> Получение значения несуществующего свойства:</b><br>";
 echo "<b> Значение:{$obj->closed}</b><br>";
  echo "<b>Обращение к несуществующему методу:</b><br>";
  $obj->do(2);