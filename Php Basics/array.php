<?php
//$arr=array("Vishal","Amit","Bhaavit");
//echo '<pre>';
//print_r($arr);
/*foreach($arr as $key=>$val){
	echo $val;
	echo "<br/>";
}*/

//$arr=array("name"=>"Vishal","city"=>"Delhi");
//echo '<pre>';
//print_r($arr);
/*foreach($arr as $key=>$val){
	echo $key;
	echo "<br/>";
}*/
//echo $arr['0'];
/*$arr=array("student1"=>array(
	"name"=>"Vishal","city"=>"Delhi","subject"=>
	array("English","Hindi"),"age"=>10
));
echo '<pre>';
print_r($arr['student1']['subject'][1]);*/

//$arr=array("Vishal","Amit","Bhaavit");
//echo count($arr);
//sort($arr);
//ksort($arr);
//print_r($arr);

$arrCity=array("Delhi","Agra","Pune");
sort($arrCity);
?>

<select>
	<option>Select City</option>
	<?php
	foreach($arrCity as $city){
		echo "<option>$city</option>";
	}
	?>
</select>