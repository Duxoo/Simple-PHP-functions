<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Компонентный подход</title>
</head>
<body>
<?php require_once("component_gbook_add.php");?>
<h1>Добавьте свое сообщение</h1>
<form method="post">
	Ваше имя: <input type="text" name="new[name]"><br>
	<?php if(@$data['error']['no_user_name']) { ?>
		<span style="color: red">Не указано имя пользователя!</span><br>
	<?php } ?>
	Комментарий: <br>
	<textarea name="new[text]" cols="60" rows="5"></textarea><br>
	<?php if(@$data['error']['no_message_text']) { ?>
		<span style="color: red">Не указан комменатарий!</span><br>
	<?php } ?>
	<input type="submit" name="add">
</form>
<?php require_once("component_gbook_show.php")?>
<h1>Сообщений гостевой книги</h1>
<?php
	foreach ($data as $id => $e) { ?>
		Имя человека: <?= $e['name']?><br>
		Его комменатрий:<br> <?= $e['text'] ?> <hr>
<?php } ?>
<h2>Последние новости</h2>
<?php require_once("component_news_show.php"); ?>
<ul>
<?php foreach ($data as $i => $n) { ?>
	<li><?= $i +1 ?> Новость: <?= $n ?></li>
<?php } ?>	
</ul>
</body>
</html>