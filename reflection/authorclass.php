<?php

//authorclass.php
//reflects to main8.php
class author {
	public function nombre($nombre){
		$nombre->author ('Yanira');

		//display details of object by using var_dump()
		var_dump(new ReflectionClass($nombre));

		//triggering its methods of the above code
		//assigning $objReflected to the new ReflectionClass
		//will return array with each method info 
		$objReflected= new ReflectionClass($nombre);
		var_dump($objReflected->getMethods());

		//another method is getProperties()
		//retriees properties of object
		var_dump($objReflected->getProperties());

		//retreiving a single method again to call invoke()
		$ownedMethod = $objReflected->getMethod('author');
		$ownedMethod->invoke ($nombre);

		//modifying code a execution time 
		$objReflected= new ReflectionClass($nombre);
		$Author=$objReflected->getProperty('name');

		//use setAccessible to have access to reflection property
		$Author->setAccessible(true);

		//use to change a private variable
		$Author->setValue($nombre, 'Morales');
		var_dump($Author->getValue($nombre));

		//callback
		//accepts array
		var_dump(call_user_func(array($nombre, 'authorsName')));
	}
}
?>
