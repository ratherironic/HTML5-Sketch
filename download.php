<?php
if(isset($_GET['file'])){
	download($_GET['file']);
}
function download($img){
	$file = $img;
	if(file_exists('images/' . $file)){
		header('Content-type: octet/stream');
	  header('Content-disposition: attachment; filename="images/'.$file.'";');
	  header('Content-Length: '.filesize("images/" . $file));
	  readfile("images/" . $file);
		exit;
	}else{
		echo "nope.";
	}
}
?>
