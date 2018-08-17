<?php
require_once("User.php");
$fd = fopen("text.obj", "r");
if(!$fd) exit("Невозможно прочитать файл");
$text = fread($fd, filesize("text.obj"));
fclose($fd);
$obj = unserialize($text);
print_r($obj);