<?php 


/**
 * 
 */
class Person 
{
	public $fName;
	public $lName;
	
	Public function __construct($firstname,$lastname)
	{
		$this->fName = $firstname;
		$this->lName = $lastname;
	}

	Public function sayHello() {
		return "Hello, my name is". $this->fName . " ".$this->lName;
	}
}

	$vaish = new Person("Vaishnavi","Raghavendra");
	echo $vaish->sayHello();
 ?>