<?php
include "../Model/config.php";
include "../Model/class.php";

class BrowseContent{	

  function __construct(){

  }

  function browseByCategory($dept){
	$posts = array();
    $conn = connect_db();

    if($dept == "SOFTWARE"){
           $query = "select * from engineringpost";
    }
    else{
    	return;
    }

     
     $stmt = $conn->prepare($query);
     if ($stmt->execute()) {
            $stmt->store_result();
			      $stmt->bind_result($post_id, $content, $email, $department);
            
            while ($stmt->fetch()) {
              $post = new post();
              $post->id = $post_id;
              $post->content = $content;
              $post->email = $email;


              $namesql = "select username, university, department, yearLevel from users where emailid  = '$email'";
              $result = $conn->query($namesql);

              if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                          $nam = $row["username"];
                          $univ = $row["university"];
                          $dept = $row["department"];
                          $yrl = $row["yearLevel"];
                        }
              } 
              else {
                   $nam = "";
                   $univ = "";
                   $dept = "";
                   $yrl = "";
                   
                }



              $post->name = $nam;
              $post->university = $univ;
              $post->department = $dept;
              $post->yearLevel = $yrl;
              
              # code...
              array_push($posts, $post);
            }

     	# code...
     }

    return $posts;
	

  }


}
?>
