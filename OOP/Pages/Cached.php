<?php
 require_once("Page.php");
 class Cached extends Page {
 	protected $expires, $store;
 	public function __construct($title = '', $content = '', $expires = 0) {
 		parent::__construct($title, $content);
 		$this->expires = $expires;
 		//подготовка хранилища
 		//$this->store = new Memcached();
 		//$this->store->addServer('localhost', 11211);
 		/*Memcached::set() сохраняет значение value на memcache сервере под указанным ключом key.*/
 		$this->set($this->id('title'), $title);
 		$this->set($this->id('content'), $content);
 	}
 	//проверить, есть ли позиция $key в кэше
 	public function isCached($key) {
 		//return (bool) $this->store->get($key);
 	}
/* 	поместить в кэш по ключу $key значение $value
	проверется, нет ли записей с таким ключом
	если нет- вызывается метод set() memcache
 	если ключ уже существует:
 	 1 не делать ничего, если $force принмает значение false
 	 2 переписать, если $force имеет значение true*/
 	protected function set($key, $value, $force = false) {
/* 		if($force) {
 			$this->store->set($key, $value, $this->expires); 
 		}
 		else {
 			if($this->isCached($key)) {
 				$this->store->set($key, $value, $this->expires);
 			}
 		}*/
 	}
 	//извлечение $key из кэша
 	protected function get($key) {
 		return $this->store->get($key);
 	}
 	public function id($name) {
 		die("bla");
 	}
 	public final function title() {
/* 		if($this->isCached($this->id('title'))) {
 			return $this->id('title');
 		}
 		else {
 			return parent::title();
 		}*/
 	}
 	public final function content() {
/* 		if($this->isCached($this->id('content'))) {
 			return $this->id('content');
 		}
 		else {
 			return parent::content();
 		}*/
 	}	
 }