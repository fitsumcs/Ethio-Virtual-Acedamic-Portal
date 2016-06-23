<?php
include_once('dbConnect.php');
$db = new dbConnect();
     
    

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $emailid = $_POST['emailid'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];
    
    if($_POST['role'] == "university"){
            
            $univ = $_POST['university'];
            $field = $_POST['field'];
            $dept = $_POST['department'];
            $yearlvl = $_POST['year'];

    
            try {
                if($_POST["agreement"]){
                    if($password == $confirmPassword){
                            $email = $db->isUserExist($emailid);
                            if(!$email){
                                $register = $db->UserRegister($username, $emailid, $password, $univ, $field, $dept, $yearlvl);
                                if($register){
                                    echo '<h2> YOUR REGISTRATION IS SUCCESSFULLED</h2>
                            <h3>Welcome To ETHIO VIRTUAL ACEDAMY PORTA</h3>
                            <p>To Login to your account</p>
                            <a href= "../indexx.php">Login</a>';
                                }else{
                                    echo ' <h2>AM SO SORRY YOUR REGISTRATION IS NOT SUCCESSFULLED</h2>
                                 <p>Because your Email is Already Exist</p>
                                 <p>Please Try Again</p>
                                 <a href= "../View/createAccount.php">Login</a>';
                                }
                            } else {
                                echo "<script>alert('Email Already Exist')</script>";
                            }
                        } else {
                             echo "<script>
                                var check = document.getElementById('check').innerHTML = 'pls enter form correctly';
                                    </script>";
                             Header('location: createAccount.php');
                             echo "string";

                        }
                }

        } catch (Exception $e) {
                //echo $e->getMessage();
                echo "please accept";
            }
    }

    else if ($_POST['role'] == "Instructor"){
        if($password == $confirmPassword){
                $email = $db->InstructorExist($emailid);
                if(!$email){
                    $register = $db->Instructor($emailid, $username, $password);
                    if($register){
                        echo '<h2> YOUR REGISTRATION IS SUCCESSFULLED</h2>
                            <h3>Welcome To ETHIO VIRTUAL ACEDAMY PORTA</h3>
                            <p>To Login to your account</p>
                            <a href= "../indexx.php">Login</a>';
                    }else{
                        echo ' <h2>AM SO SORRY YOUR REGISTRATION IS NOT SUCCESSFULLED</h2>
                                 <p>Because your Email is Already Exist</p>
                                 <p>Please Try Again</p>
                                 <a href= "../View/createAccount.php">Login</a>';
                    }
                } else {
                    echo "<script>alert('Email Already Exist')</script>";
                }
            } else {
                 echo "<script>
                    var check = document.getElementById('check').innerHTML = 'pls enter form correctly';
                        </script>";
                 Header('location: createAccount.php');
                 echo "string";

            }
    }
       
}

    


?>