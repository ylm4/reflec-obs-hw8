<?php
//main8.php

class main8 {
	public $name;

	public function __construct ($name) {
		$this->namee=$name;
	
	}
	public function author($name){
		$this->namee=$name;
	}
	public function authorsName(){
		echo $this->namee;
	}
	public function getAuthorName(){
		return $this->namee;
	}
}
?>
