<?php
	function loadBook($fname) {
		if(!file_exists($fname)) return [];
		/*unserialize — Создает PHP-значение из хранимого представления
		file_get_contents — Читает содержимое файла в строку*/
		$Book = unserialize(file_get_contents($fname));
		return $Book;
	}
	function saveBook($fname, $book) {
		/*file_put_contents(Путь к записываемому файлу,данные)
		 — Пишет данные в файл*/
		file_put_contents($fname, serialize($book));
	}
?>