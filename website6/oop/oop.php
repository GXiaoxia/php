<?php 
	header('content-type:text/html;charset=utf-8'); 
	# 创建一个类
	class Person{
		protected $name;
		private $email;

		private static $age = 10;

		public static function getAge(){
			return Person::$age;
		}

		// name
		public function setName($sbqname){
			$this->name = $sbqname;		//调用时不用写$,$this代表自身的对象
		}
		public function getName(){
			return $this->name;
		}
		// email
		public function setEmail($sbqemail){
			$this->email = $sbqemail;
		}
		public function getEmail(){
			return $this->email;
		}
		# 构造函数
		public function __construct($sname,$semail){
			$this->name = $sname;
			$this->email = $semail;
			// echo "Person 对象已被创建";
			echo __CLASS__."对象已被创建";
		}
		# 析构函数
		public function __destruct(){
			echo __CLASS__."对象已被销毁";
		}
	}

	// $person1 = new Person;
	/*$person1->name = "guo";
	echo $person1->name;*/

	/*$person1->setName('g');
	echo $person1->getName();
	$person1->setEmail('11@qq.com');
	echo $person1->getEmail();*/
	
	/*$person1 = new Person("guo","11@qq.com");
	echo $person1->getName();*/

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

	$customer = new Customers('li','li@qq.com',1000);	// 不传值会报错
	// $customer->setSalary(1000);
	// echo $customer->getName();
	// echo $customer->getEmail();
	// echo $customer->getSalary();

	$customer->setName('aa');
	echo $customer->getName();
	// echo $customer->name;

	# 调用静态变量
	// echo Person::$age;		//public
	// echo Person::getAge();

 ?>


