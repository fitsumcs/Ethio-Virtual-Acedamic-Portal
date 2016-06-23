<?php
include "databas.php";
include "includes/header.php";
session_start();
include "userProfile.php";
$database=$field."resource";

if(isset($_GET['search'])){
	$search= $_GET['search'];
}

if(isset($search)){
	$dou=$_SERVER['DOCUMENT_ROOT'];

	$sql = "SELECT name, title, reg_date FROM $database where title Like '$search%'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row

		echo "<div class='mains'>";
		echo "<ul>";
		echo "<div style='position:relative; padding-left:200px;'>";
		echo "<span style='color:green; font-size:23px;font-family:Times'>Search result</span>";
	    while($row = $result->fetch_assoc()) {
	    	 echo "<div id='search'><a href=''><li>";
	    	 echo "<span style='color:#2F4F4F;font-size:17px;'>";
	         echo "Title: " . $row["title"]. " " ."id: " . $row["name"]."</span><br>"."Uploaded in".$row["reg_date"]." . ";
	         echo  "<span style='color:	#B0C4DE; font-style:italic;'>by: ".$user." form: ".$university." </span>";
	         echo "<a style='color:blue;' href='uploads/download1.php?nama=".$row['name']."'>download</a>";
	         echo "</li></div>";
	         
	    }
	    echo "</div></ul></div>";
	} else {
		echo "<div class='main'><ul>";
	    echo "<span style='color:green; font-size:20px;'>No results found</span>";
	    echo "</div></ul>";
	}
	$conn->close();
}
?>