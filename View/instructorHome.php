<?php
//include_once('Controller/dbConnect.php');
include "instructorUi.php";

session_start();
if(!$_SESSION['valid_user'])
    Header('location: ../indexx.php');
#echo '<br />You are logged in as: '.$_SESSION['valid_user'].' <br />';
?>


<head>
<link rel="stylesheet" type="text/css" href="../css/home.css">
<script src="../js/home.js"></script>
</head>
<body>
	<div class = "home_container"> 
	<div>
    <div id = "head" >
    	<div id = "left-holder"><img id="left" src="../image/left.png"></div>
        <div id = "right-holder"><img id="right" src="../image/right.PNG"></div>
    
    </div>
   </div>
<div id="display">
	<hr>
     <main>
     		<div class = "info">
     		<span >RECENTLY SHARED MATERIALS </span>
     	</div>
			<div id="pdf">
				<ul>
					<li>
						
						
						<h3>Books Resource</h3>
						<hr>
						<figure>
							<a href="../uploads/download1.php?nama=1.png"><img src="../image/1.jpg"></a>
							<figcaption>Best Book</figcaption>
						</figure>
						<figure>
							<a href="../uploads/download1.php?nama=1.png"><img src="../image/3.jpeg"></a>
							<figcaption>Images</figcaption>
						</figure>
						<figure>
							<a href="../uploads/download1.php?nama=1.png"><img src="../image/2.jpg"></a>
							<figcaption>Images</figcaption>
						</figure>
						<figure>
							<a href="../uploads/download1.php?nama=SDS.pdf"><img src="../image/1.jpg"></a>
							<figcaption>Images</figcaption>
						</figure>
					</li>
				</ul>
			</div>
			

			<div id="video">
				
				<ul>
					<li>
						
						<h3>Video Resource </h3>
						<video width="320" height="240" controls autoplay>
					  		<source src="uploads/1.mp4" type="video/mp4">
					  		Your browser does not support the video tag.
						</video>
					
					
						<video width="320" height="240" controls>
					  	<source src="uploads/2.mp4" type="video/mp4">
					  	Your browser does not support the video tag.
						</video>
					</li>
				</ul>

			</div>

			<div id="video">
				<ul>
					<li>
						<hr>
						<h3>Audio Resource </h3>
						<audio width="320" height="240" controls>
					  		<source src="../uploads/1.mp3" type="audio/mp4">
					  		Your browser does not support the video tag.
						</audio>
					
					
						<audio width="400" height="240" controls>
					  		<source src="../uploads/1.mp3" type="audio/mp4">
					  		Your browser does not support the video tag.
						</audio>
						<audio width="400" height="240" controls>
					  		<source src="../uploads/1.mp3" type="audio/mp4">
					  		Your browser does not support the video tag.
						</audio>
						
					</li>
				</ul>

			</div>
		</main>
	</div>
</div> 	
</body>

<?php include "footer2.php" ?>