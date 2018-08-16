<!DOCTYPE html>
<html lang="ru">
<head>
	<title>MVC</title>
</head>
<body>
<h1>Вставьте свое сообщение:</h1>
<form action="controller.php" method="POST">
	Ваше имя: <input type="text" name="new[name]"><br>
	Комментарий:<br>
	<textarea name="new[text]" cols="60" rows="5"></textarea><br>
	<input type="submit" name="add" value="Добавить">
</form>
<h2>Гостевая книга:</h2>
<?php
	foreach ($book as $id => $e) { ?>
		Имя человека: <?=$e['name']?><br>
		<!--nl2br — Вставляет HTML-код разрыва 
		строки перед каждым переводом строки-->
		Его комментарий:<br> <?=nl2br($e['text'])?><hr>
<?php } ?>
</body>
</html>