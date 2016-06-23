<?php


include "header.php";
include "../Controller/browseContent.php";

session_start();
if(!$_SESSION['valid_user']){

}
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dept = $_POST['dept'];
}


?>

<head><link rel="stylesheet" type="text/css" href="../css/DiscussionPanel.css"></head>
<body>
<div class="discussion_container">

<div class = "message">
   <pre style = "margin-top:4px; margin-bottom : 0px; ">Welcome to The <?php echo $dept; ?> Discussion Panel</pre>
   

</div>


<?php


$func = new BrowseContent();

$posts = $func->browseByCategory($dept);

for ($i=0; $i < count($posts); $i++) { 
    $post = $posts[$i];

?>


         <li class = "Qprofile" >
         <span><img src = "" width = "100px" height = "100px" alt = "image" style = "float : left"/></span>
         	<span style = "font-size:1.8em; margin-left:0;"> <?php  echo $post->name;?></span><br/>
            <span ><?php echo $post->university; ?>university</span><br/>
         	<span><?php echo $post->department; ?>Department</span><br/>
         	<span><?php echo $post->yearLevel; ?>Student</span>
         </li>

         
         <li class = "Qcontent">
           <form  method = "post" action = "discusssionAnswer.php" >
               <input style = "display:none;" name = "post_id" value = "<?php echo $post->id; ?>" >
               <input  name ="form_id" class = "Qbutton" type = "submit" value = "<?php echo $post->content; ?>"> 
           </form>
         </li>
           
<?php
           # code...
         }
?>         
<?php include "footer2.php"; ?>

