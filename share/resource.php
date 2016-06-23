<?php
	
	//include "register.php";
	
	class resource {
		private $title;
		private $description;
		private $fileType;
		private $name;
		private $ext;
		private $date;
		//Student $stud;

		function __construct()
		{
		}
		function get_title(){
			return $this->title;
		}
		function set_title($title){
			$this->title = $title;
		}
		function set_fileType($file){
			$this->fileType = $file;
		}
		function set_name($name){
			$this->name = $name;
		}
		function get_name(){
			return $this->name;
		}
		function get_fileType(){
			return $this->fileType;
		}
		function get_date(){
			return $this->date;
		}
		function set_date($date){
			$this->date=$date;
		}

		/*
		function get_stud(){
			return $this->stud;
		}*/
		function upload(){  
				$target_path = "uploads/";  
				$target_path = $target_path.basename( $_FILES['fileToUpload']['name']);   
  
				if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) {  
    				echo "<div id='success'>";
    				echo "File uploaded successfully! <br>";  
    				echo "</div>";
				} else{  
  				  echo "Sorry, file not uploaded, please try again!";  
				}
		}
		function filesys(){
			$myfile = fopen("exersise.txt", "a") or die("Unable to open file!");
    		fwrite($myfile, $this->title.":-");
    		fwrite($myfile,$this->name."\n");
    		fclose($myfile);
		}
		
			

}
?>