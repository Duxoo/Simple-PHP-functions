<?php
require_once("User.php");
$obj = new User("nick", "1234");
/*$fd = fopen("text.obj", "w");
if(!$fd) exit("Невозможно открыть файл");
fwrite($fd, serialize($obj));*/
$text = serialize($obj);
print_r($obj);
echo $text;