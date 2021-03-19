<?php
class class1{
	function __construct(){
		echo "__construct";
	}
	function test1(){
		echo "Class1_test1";
	}
	
	function __destruct(){
		echo "__destruct";
	}
}

class class2 extends class1{
	function __construct(){
		echo "class2__construct";
		parent::__construct();
	}
	function test2(){
		echo "Class2_test2";
	}
	
}
$obj=new class2();
$obj->test1();
?>