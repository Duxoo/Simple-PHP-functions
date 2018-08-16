<?php
$data = [];
$f = fopen("news.txt", "r");
for ($i = 1; !feof($f) && $i <= 5; $i++) {
	/*trim — Удаляет пробелы (или другие символы) из начала и конца строки*/
	/*fgets — Читает строку из файла*/
	$n = trim(fgets($f, 1024));
	if(!$n) continue;
	$data[] = $n;
}