<?php
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname ="account";


// Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 
  echo "";
  //return $conn;

/*
//sql to create table
$sql = "CREATE TABLE computationalResource (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(190) NOT NULL,
title VARCHAR(100) NOT NULL,
department VARCHAR(80) NOT NULL,
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table product created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
*/
?>