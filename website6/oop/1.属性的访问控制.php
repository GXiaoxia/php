<?php 
	header('content-type:text/html;charset=utf-8');
	# 创建一个类
	class Person{
		public $name;
		private $email;
	}

	$person1 = new Person;

	$person1->name = 'guo';
	echo $person1->name;		// guo

	$person1->email = '11';
	echo $person1->email;		// 报错
 ?>

 <!-- public: 可以在任意地方访问
 	  protected: 可以被其自身以及其子类和父类访问
 	  private: 只能被其定义所在的类访问
  -->