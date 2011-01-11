<?php


if(isset($_POST['u'])){	
	echo createImg();
}
function createImg(){
	$dataurl = str_replace(" ", "+", $_POST["u"]);
	$data = substr($dataurl, strpos($dataurl, ","));
	$filename = rand(100, 5280) . '.png';
	file_put_contents('images/' . $filename, base64_decode($data));
	return $filename;
}

?>