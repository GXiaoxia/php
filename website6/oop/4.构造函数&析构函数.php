<?php 

	class Person{
		public $name;
		private $email;

		public function getName(){
			return $this->name;
		}

		public function getEmail(){
			return $this->email;
		}

		# 构造函数(用来在创建对象时初始化对象,即为对象成员变量赋初始值,总与new运算符一起使用在创建对象的语句中)
		public function __construct($sbqname,$sbqemail){
			$this->name = $sbqname;
			$this->email = $sbqemail;
			echo __CLASS__."对象已被创建";
		}

		# 析构函数(当对象结束其生命周期时(例如对象所在的函数已调用完毕),系统自动执行析构函数)
		public function __destruct(){
			echo __CLASS__."对象已被销毁";
			// echo $this->name."已被销毁";
		}
	}

	$person1 = new Person('guo','11@qq.com');	// 就不需要再调用setName()和setEmail()方法了
	echo $person1->getName();
	echo $person1->getEmail();

 ?>