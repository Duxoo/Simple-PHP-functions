<?php
	if(!defined("GBook")) {
		define("GBook" , "gbook.dat");
	}
	require_once("model.php");
	if(!empty($_REQUEST['add'])) {
		$new = $_REQUEST['new'];
		do {
			/*trim — Удаляет пробелы (или другие символы) из начала и конца строки*/
			if(empty(trim($new['name']))) {
				$data['error']['no_user_name'] = true;
				break;
			}
			if(empty(trim($new['text']))) {
				$data['error']['no_message_text'] = true;
				break;
			}
			//загружаем файл
			$tmpBook = loadBook(GBook);
			/*добавить в книгу запись пользователя
			она хранится в массиве $new*/
			$tmpBook = [time() => $_REQUEST['new']] + $tmpBook;
			saveBook(GBook, $tmpBook);
		} while(false);
}
