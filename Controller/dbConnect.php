<?php

include "../Model/config.php";

/**
 * Created by PhpStorm.
 * User: Buli Pc
 * Date: 5/27/2016
 * Time: 1:07 PM
 */
class dbConnect {

        
    function __construct() {
    }
    
    public function UserRegister($username, $emailid, $password, $univ, $field,  $dept , $year){
        $password = md5($password);
        //$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABSE);
        $conn = connect_db();
        $sql = "INSERT INTO users(username, emailid, password, university, field, department,  yearLevel) VALUES ('$username','$emailid' , '$password' , '$univ' , '$field',  '$dept' , '$year')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            return true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            return false;
        }


    }

    public function Instructor($username, $emailid, $password){
        $password = md5($password);
        $conn = connect_db();
        $sql = "INSERT INTO instructor(email, name, password) VALUES ('$username','$emailid' , '$password')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            return true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            return false;
        }


    }
    public function InstructorExist($emailid){
        $conn = connect_db();
        $sql = "SELECT * FROM instructor WHERE email = '".$emailid."'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0){
            return true;
        } else {
            return false;
        }
    }
    

    
    public function isUserExist($emailid){
        //$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABSE);
        $conn = connect_db();
        $sql = "SELECT * FROM users WHERE emailid = '".$emailid."'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0){
            return true;
        } else {
            return false;
        }
    }

   
   public function Login($emailid, $password, $role){
       session_start();
       $conn = connect_db();
       $password = md5($password);

       if($role == "university"){
                $query1 = "SELECT * FROM users WHERE emailid = '$emailid' and password = '$password'" ;
                $result1 = $conn->query($query1);
                if ($result1->num_rows)
                {
                    $_SESSION['valid_user'] = $emailid;
                    
                }
                
                //$conn->close();
        }
        if($role = "Instructor"){
             $query2 = "SELECT * FROM instructor WHERE email = '$emailid' and password = '$password'" ;
             $result2 = $conn->query($query2);
                
                if ($result2->num_rows)
                {
                    $_SESSION['valid_ins'] = $emailid;
                }

              
        }
       
        if (isset($_SESSION['valid_user']))
            {
                header("Location: ../View/home.php"); 
                return true;    
        }

        else if (isset($_SESSION['valid_ins'])){
                    //header("Location: ../View/instructorHome.php"); 
                    echo "why";
                    return true;
                    //exit;
                }
        
        else
            {
                if (isset($emailid))
                {
                echo 'Could not log you in.<br />';
                header ("Location: ../indexx.php");

                }
                return false;
         }
     }

    

    public function Close(){
        mysqli_close();
    }
}

?>