<?php include "includes/header.php" ?>
	<style type="text/css">
		
	</style>

<div class="discussion_container">
	<div id='display'>
			<div class='main'>
				<section>
					<form method="post" enctype="multipart/form-data">
					<ul>
						<li><h1>Post Exersise</h1></li> 
						<li>Title : <input type='text' name='title' value=''></li> 
				    	<li>Select File:<input style="height:20px; width:200px;" type="file" name="fileToUpload" >  </li>
				   		<li> <input style="background-color:green;color:white; width:100px;"type="submit" value="Upload" name="submit" onclick="showUser()"/> </li>
					</ul>
				</form>
				</section>
			</div>


 	<main>
			<ul>
			<?php
			include "ExersiseControl.php";
        	$res = display();
        	 echo "<h2 style='color:#C0C0C0;'>Shared material</h2>";
        	for ($i=0; $i < count($res); $i++) { 
            		$materail = $res[$i];
            		$file=$materail->get_name();
            		//$res = display();
           	 echo "<div id='resource'><a href=''><li>";
             //echo $i + 1;
             //echo ".";
             echo $materail->get_title().":-";
             echo $materail->get_name()." . ";
             echo "</li></a><li>";
             echo "Upload in ".$materail->get_date()." .";
             echo "<a style='color:blue;' href='uploads/download1.php?nama=".$file."'>download</a>";
              echo "</li></div>";
            
			} 

			?>
		
			</ul>
		</main>
	</div>
<?php include "includes/footer.php"; ?>
</div>
<script type="text/javascript">
	function showUser() {
    
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("display").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","ExersiseControl.php",true);
        xmlhttp.send();
    	}
	}


</script>

