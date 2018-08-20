<?php
	try {
		/* создаем объект класса PDO аргументы:
		1) включающий в себя:название драйвера, адрес сервера, имя базы данных
		2) имя пользователя, пароль
		  dbh-database handle */
		$dbh = new PDO('mysql:host=localhost;dbname=test', 'root','');
	}
	catch(PDOException $e) {
		echo "Невозможно установить соединение с базой данных:".$e->getMessage();
	}
?>