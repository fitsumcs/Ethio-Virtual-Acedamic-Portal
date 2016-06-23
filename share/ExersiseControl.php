<?php

include "exersise.php";
include "includes/dbConnect.php";
 $conn = connect_db();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  

		$title = $_POST["title"];
		$fileType = $_FILES['fileToUpload']['type'];
		$name =$_FILES['fileToUpload']['name'];
		
		
		  if(isset($_POST['title']) && isset($_POST['fileToUpload'])){
        if(empty($name)){
          $materail = new exersise();
    		  $materail->set_title($title);
        	$materail->set_fileType($fileType);
        	$materail->set_name($name);
        	$materail->upload();
        	$materail->filesys();
        	echo "<div id='display'><a href=''>";
        	//echo "Title:".$materail->get_title()."<br> ";
        	//echo "Name:".$materail->get_name()."<br>";
        	$filename=$materail->get_name();
        	$title=$materail->get_title();
    		  $file = "$filename"; //Let say If I put the file name Bang.png
        	echo "</a></div>";

    		  //include "databas.php";
          if(($filename=="")){
    		  //store to database
      		  $sql = "INSERT INTO resource (name,title)
        		VALUES ('$filename','$title')";
          }
      		if ($conn->query($sql) === TRUE) {
          	//echo "Register successfully";
          	//echo "<div class='main'><h1>Register successfully</h1></div>";
      		} else {
          		echo "Error: " . $sql . "<br>" . $conn->error;
     		}
    }
  }
  else{
    echo "<div id='error'>";
    echo "Title is required";
    echo "</div>";
  }
}

function display()
{  	
	    $res = array();
	     $conn = connect_db();
		
	     $query = "select  * from resource";
	     $stmt = $conn->prepare($query);
	     if ($stmt->execute()) {

            $stmt->store_result();

            $stmt->bind_result($id,$name,$title,$date);
            while ($stmt->fetch()) {
            	$materail = new exersise();
            	$materail->set_name($name);
            	$materail->set_title($title);
              $materail->set_date($date);
            	# code...
              	array_push($res, $materail);
            }

     	# code...
     	}

		return $res;
}
function db(){}


 ?>
 
