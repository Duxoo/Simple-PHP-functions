<?php
	class MathComplex {
		public $re, $im;
		function add($re, $im) {
			$this->re += $re;
			$this->im += $im;
		}
	}
	$obj = new MathComplex;
	$obj->re = 6;
	$obj->im = 101;
	$obj->add(18.09,7);
	echo "{$obj->re}, {$obj->im}";
?>