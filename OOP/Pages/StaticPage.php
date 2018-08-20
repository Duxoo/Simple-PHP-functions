<?php
	require_once("Cached.php");
	class  StaticPage extends Cached {
		public function __construct($id) {
			//проверяем, нет ли такой страницы в кэше
			if($this->isCached($this->id($id))) {
				//если есть, то инициализируем объект содержимым кэша
				parent::__construct($this->title(), $this->content());
			}
			//данные пока не кэшированы достаем их из БД
			else {
				/*PDO – PHP Data Objects – это прослойка, которая предлагает 
				универсальный способ работы с несколькими базами данных*/
				$query = "SELECT * FROM static_pages WHERE id = :id LIMIT 1";
				//sth = Statement Handle(инструкция)
				/*Использование prepared statements укрепляет защиту от SQL-инъекций.*/
				$sth = $dbh->prepeare($query);
				$sth = $dbh->execute($query, [$id]);
				$page = $sth->fetch(PDO::FETCH_ASSOC);
				parent::__construct($page['title'], $page['content']);
			}
		}
		public function id($name) {
			return "static_page_{$id}";
		}
	}