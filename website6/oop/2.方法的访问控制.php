<?php 
	class Person{
		public $name;
		private $email;

		public function setName($sbqname){
			$this->name = $sbqname;
		}
		public function getName(){
			return $this->name;
		}

		public function setEmail($sbqemail){
			$this->email = $sbqemail;
		}
		public function getEmail(){		//此处为private的话下面报错
			return $this->email;
		}
	}

	$person1 = new Person;

	$person1->setName('g');
	echo $person1->getName();		// g

	$person1->setEmail('g@163.com');
	echo $person1->getEmail();		// g@163.com,因为getEmail()是公有的,其可以访问line4: private $email;如果getEmail()为私有的,则访问不到,会报错
 ?>