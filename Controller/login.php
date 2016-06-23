<?php
include_once('dbConnect.php');
     
    $db = new dbConnect();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emailid = $_POST['emailid'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $user = $db->Login($emailid, $password, $role);
    if ($user) {
        // Registration Success
        //header("location: ../View/home.php");
        
        
    } else {
        echo "sorry";
        //header("location: ../indexx.php");

        
    }
}

?>