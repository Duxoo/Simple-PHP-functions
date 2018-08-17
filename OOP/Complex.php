<?php
 class Complex {
 	public $re, $im;
 	 /*инициализация нового объекта
 	конструктор вызывается всякий раз, когда мы создаем
 	новый объект класса*/
 	function __construct($re = 0, $im = 0) {
 		$this->re = $re;
 		$this->im = $im;
 	}
 	//добавляет к текущему комплексному числу другое
 	function add(Complex1 $y) {
 		$this->re += $y->re;
 		$this->im += $y->im;
 	}
 	/*функция вызывается каждый раз автоматически 
 	когда требуется неявное преобразование ссылки на объект в строку
 	поэтому название функции начинается с __*/
 	function __toString() {
 		return "({$this->re}, {$this->im})";
 	}
 }
$a = new Complex1(10,5);
$a->add(new Complex1(5,10));
 echo $a;