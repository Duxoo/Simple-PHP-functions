<?php
	//константа
	define("GBook", "gbook.dat");
	require_once("model.php");
	$book = loadBook(GBook);
	if(!empty($_REQUEST['add'])) {
		$book = [time() => $_REQUEST['new']] + $book;
		saveBook(GBook, $book);
	}
/*	array(
		время_добавления => array(
			name => имя_пользователя, 
			text => текст_пользователя
		),
	);*/
	include "view.php";
