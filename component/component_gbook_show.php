<?php
if(!defined("GBook")) {
	define("GBook", "gbook.dat");
}
require_once("model.php");
$data = loadBook(GBook);
//переменная $data теперь доступна вызывающему шаблону