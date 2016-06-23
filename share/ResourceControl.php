<?php
	include "resource.php";
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$title = $_POST["title"];
		$fileType = $_FILES['fileToUpload']['type'];
		$name =$_FILES['fileToUpload']['name'];
		
		$materail = new resource();
		
		$materail->set_title($title);
    	$materail->set_fileType($fileType);
    	$materail->set_name($name);
    	$materail->upload();
    	echo "Title:".$materail->get_title();
	}
?>