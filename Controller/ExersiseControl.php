<?php

include "../Model/exersise.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    
    
		$title = $_POST["title"];
		$fileType = $_FILES['fileToUpload']['type'];
		$name =$_FILES['fileToUpload']['name'];

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

	  include "../Model/databas.php";
    include 'userProfile.php';
    if((empty($filename)) || empty($title)){
      echo "<div id='erroor' style='color:green; font-size:20px;' >";
      echo "Title is required";
      echo "</div>";
    }
    else{
        
        $database=$field."resource";
        
    	  //store to database
    		$sql = "INSERT INTO $database(name,title,department,user)
      		VALUES ('$filename','$title','$dept','$user')";
        
    		if ($conn->query($sql) === TRUE) {
        	//echo "Register successfully";
        	//echo "<div class='main'><h1>Register successfully</h1></div>";
		} else {
    		echo "Error: " . $sql . "<br>" . $conn->error;
		}
}

  
}


function display()
{  	
	    $res = array();
	    include "../Model/databas.php";
      include "userProfile.php";
	     $table=$field."resource";

		
	     $query = "select  * from $table where department='$dept'";
	     $stmt = $conn->prepare($query);
	     if ($stmt->execute()) {

            $stmt->store_result();

            $stmt->bind_result($id,$name,$title,$department,$date,$user);
            while ($stmt->fetch()) {
            	$materail = new exersise();
            	$materail->set_name($name);
            	$materail->set_title($title);
              $materail->set_date($date);
               $materail->set_user($user);

            	# code...
              	array_push($res, $materail);
            }

     	# code...
     	}

		return $res;
}
function db(){}


 ?>
 
