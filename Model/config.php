<?php

define("HOST", "localhost");
define("USER", "root");
define("PASSWORD", "12345");
define("DB", "account");
define("SECURE", false); //change to true for production



//connect to db
function connect_db() {

    $conn = new mysqli(HOST, USER, PASSWORD, DB);
	if($conn -> connect_error) {
        die("Unable to connect to database::". $conn->connect_error);

    }
	return $conn;
}

?>