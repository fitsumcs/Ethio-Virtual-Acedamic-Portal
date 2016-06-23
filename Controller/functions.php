<?php
include "../Model/config.php";
include "../Model/class.php";

class Discussion{	
  public $currentPIndex = 0;
  public $currentNIndex = 0;

  function __construct(){

  }
  /*
  public function getPostMessages($loaderEmail,$more=false,$index=0,$number=6)
        {
          $conn = connect_db();

            //this is to take the deparrment of the student from the user table
            $dept_sql = "select department from users where emailid  = '$email'";
            $dept_result = $conn->query($dept_sql);
            if ($dept_result->num_rows > 0) {
                while($row = $dept_result->fetch_assoc()) {
                        $dept = $row["department"];
                      }
            }
            if(!$more){
                $this->currentPIndex = 0;
            }
            else{
                $this->currentPIndex = $index;
            }
            
             //check if a PostMessage exists with given nomineesSet and retrieve it
             $query = "select * from engineringpost
                       where department = '$dept'  
                       order by post_id desc limit ".$this->currentPIndex.",".$number;

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
         
   $this->currentPIndex = $this->currentPIndex + $number;
   return $posts;
  }
*/
  function discussion($email,$more=false,$index=0,$number=2){
	  $posts = array();
    $conn = connect_db();

    if(!$more){
                $this->currentPIndex = 0;
    }
    else{
        $this->currentPIndex = $index;
    }

    //this is to take the deparrment of the student from the user table
    $dept_sql = "select department from users where emailid  = '$email'";
    $dept_result = $conn->query($dept_sql);
    if ($dept_result->num_rows > 0) {
        while($row = $dept_result->fetch_assoc()) {
                $dept = $row["department"];
              }
    }
   $offset = $index;
 
   $query = "select * from engineringpost where department = ? limit ?, $number ";
  
   
   $stmt = $conn->prepare($query);
   $stmt->bind_param("si",$dept,$offset);
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
            $this->currentPIndex += $index + $number;
     }

    return $posts;
	
  }

  


  function askQuestion($question, $email){
    $conn = connect_db();
     
     //taking the field and department of the user who is asking the question
    $field_sql = "select field, department from users where emailid  = '$email'";
    $field_result = $conn->query($field_sql);
    if ($field_result->num_rows > 0) {
        while($row = $field_result->fetch_assoc()) {
                  //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                $field = $row["field"];
                $dept = $row["department"];
              }
    }

    if($field == "Enginering"){
      mysqli_query($conn, "insert into engineringpost (content, email, department) values ('$question', '$email', '$dept')")or 
             die(mysqli_error($conn));

    } 
    //$this->discussion($email);
    $posts = array();
    $query = "select * from engineringpost where department = '$dept'";
  
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

  
   //this function is ececuted when the user enters his answer on th e answe input.
  function insertAnswer($id, $email, $ans){
    $conn = connect_db();
    
    $field_sql = "select field, department from users where emailid  = '$email'";
    $field_result = $conn->query($field_sql);
    if ($field_result->num_rows > 0) {
        while($row = $field_result->fetch_assoc()) {
                  //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                $field = $row["field"];
                $dept = $row["department"];
              }
    }

     //echo "jakjah  ".$field."postanswer ";

    mysqli_query($conn, "insert into ".$field."postanswer (postId, email, answer) values ('$id', '$email', '$ans')")or 
             die(mysqli_error($conn));

    

     $posts = array();
     $query = "select * from ".$field."postanswer where postId = '$id'";
     $stmt = $conn->prepare($query);
     
     if ($stmt->execute()) {
            $stmt->store_result();
      $stmt->bind_result($answer_id, $post_id, $email, $answer);
            
            while ($stmt->fetch()) {
              $post = new post();
              $post->id = $answer_id;
              $post->email = $email;
              $post->content = $answer;
              
              
              $namesql =mysqli_query($conn, "select username from users where emailid  = '$email'")or die(mysqli_error($conn));
              while($name = mysqli_fetch_array($namesql)){
                  $nam = $name['username'];
              }
              $post->name = $nam;
              
              # code...
              array_push($posts, $post);
            }

      # code...
     }

    return $posts;
    

    }

    function displayAnswer($id, $email){
    
     $posts = array();
     $conn = connect_db();
     
     //this is used to get the field of the person who ask the question means the feild in
     //which the field it belongs
     $field_sql = "select field, department from users where emailid  = '$email'";
     $field_result = $conn->query($field_sql);
     if ($field_result->num_rows > 0) {
        while($row = $field_result->fetch_assoc()) {
                  //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                $field = $row["field"];
                $dept = $row["department"];
              }
    }

     $query = "select * from ".$field."postanswer where postId = '$id'";
     
     if($query){
        $stmt = $conn->prepare($query);
     }

     if ($stmt->execute()) {
            $stmt->store_result();
            $stmt->bind_result($answer_id, $post_id, $email, $answer);
            
            while ($stmt->fetch()) {
              $post = new post();
              $post->id = $answer_id;
              $post->email = $email;
              $post->content = $answer;
              
              
              $namesql = "select username, university, department, yearLevel from users where emailid  = '$email'";
              $result = $conn->query($namesql);

              if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                            //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
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

    function displayAnswer2($id){
      $conn = connect_db();
     //$answers = array();
      $answers = "";

    $query =mysqli_query($conn, "select answer from postanswer where postId = '$id'")or die(mysqli_error($conn));
    while($postanswer = mysqli_fetch_array($query)){
                  //$answer = $postanswer['answer'];
                  $namesql =mysqli_query($conn, "select username from users where emailid  = '$email'")or die(mysqli_error($conn));
                  while($name = mysqli_fetch_array($namesql)){
                    $nam = $name['username'];
                  }
                  $answers = $answers."<br/><span>".$nam."<br>".$postanswer['answer']."</span><br/>";
                  
      }
   
    return $answers;         

  }
   

}

?>