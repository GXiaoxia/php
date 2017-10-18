<?php 

	class Person{
		public $name;
		public $email;

		public function getName(){
			return $this->name;
		}

		public function getEmail(){
			return $this->email;
		}

		public function __construct($sname,$semail){
			$this->name = $sname;
			$this->email = $semail;
			// echo "Person 对象已被创建";
			echo __CLASS__."对象已被创建";
		}
	}

	# 继承
	class Customers extends Person{
		private $salary;

		public function setSalary($salary){
			$this->salary = $salary;
		} 
		public function getSalary(){
			return $this->salary;
		}

		public function setName($name){
			$this->name = $name;
		}

		public function __construct($name,$email,$salary){
			parent::__construct($name,$email);		// 调用父级
			$this->salary = $salary;
		}
	}

	$customer = new Customers('g','11@qq.com',1000);
	echo $customer->getName();
	echo $customer->getEmail();
	echo $customer->getSalary();

	// $customer->setName('a');
	// echo $customer->getName();

 ?>