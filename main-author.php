<?php

//examples from www.code.tutsplus.com

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

class author{
	public function nombre($nombre){
		$nombre->author('Yanira');
		
		//display details of object by using var_dump()
		var_dump(new ReflectionClass($nombre));

		//triggering its methods of the above
		//assigning $objReflected to the new ReflectionClass
		//will return array  with each method info
		$objReflected = new ReflectionClass($nombre);
		var_dump($objReflected->getMethods());

		//another method is getProperties()
		//retrieves properties of object
		var_dump($objReflected->getProperties());

		//retreiving a single method again to call invoke()
		$ownedMethod= $objReflected->getMethod('author');
		$ownedMethod->invoke($nombre);

		//modifying code at execution time
		//

		$objReflected = new ReflectionClass($nombre);
		$Author =$objReflected->getProperty('name');
		
		//use setAccessible to have access to  reflection property 
		$Author->setAccessible(true);
		
		//use to change a private variable
		$Author->setValue($nombre, 'Morales');
		var_dump($Author->getValue($nombre));

		//callback
		//accpets array
		var_dump(call_user_func(array($nombre, 'authorsName')));
	}
}

function main8Author(){
	$nombre = new main8('Abe','Vega');
	$Author = new Author();
	$Author->nombre($nombre);
}

main8Author();
?>
