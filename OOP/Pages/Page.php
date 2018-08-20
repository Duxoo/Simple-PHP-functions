<?php
//базовый класс
require_once ("connect_bd.php");
 class Page {
 	protected $title, $content;
 	public function __construct($title = '', $content = '') {
 		$this->title = $title;
 		$this->content = $content;
 	}
 	public function title() {
 		return $this->title;
 	}
 	public function content() {
 		return $this->content;
 	}
 	public function render() {
 		/*htmlspecialchars — Преобразует специальные символы в HTML-сущности*/
 		echo "<h1>".htmlspecialchars($this->title())."</h1>";
 		echo "<p>".nl2br(htmlspecialchars($this->content()))."</p>";
 	}
 }