<?php
/*
function add(){
	return 10;
}
$x=add();
echo $x+20;
*/

/*function add($x,$y=5){
	echo $x+$y;
}
add(10,30);*/

$x=20;
function add(){
	$x=30;
}
add();

echo $x;
?>