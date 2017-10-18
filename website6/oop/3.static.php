<?php 
	
	class Person{
		public $name;
		private $email;
		
		// static $age = 10;

		private static $age = 10;
		public static function getAge(){
			return Person::$age;
		}

	}

	# 调用静态变量
	// echo Person::$age;		//public

	echo Person::getAge();
 ?>