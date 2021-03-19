<?php
if(isset($_POST['submit'])){
	$file=rand(111111111,999999999);

	echo '<pre>';
	print_r($_FILES);
	move_uploaded_file($_FILES['doc']['tmp_name'],'media/'.$file.$_FILES['doc']['name']);
}

?>
<form method="post" enctype="multipart/form-data">
	<input type="file" name="doc"/>
	<input type="submit" name="submit"/>
</form>