<?php
//include("post.php");
		include "../Controller/functions.php";
    include "header.php";
 
		session_start();
		if(!$_SESSION['valid_user'])
		 //   Header('location:indexxx.php');
		echo 'You are logged in as: '.$_SESSION['valid_user'].' <br />';

?>

<head><link rel="stylesheet" type="text/css" href="../css/DiscussionPanel.css"></head>
<body>
<div class="discussion_container">

<div class = "message">
   <pre style = "margin-top:4px; margin-bottom : 0px; "> Transcendent  Your Knowledge</pre>
   

</div>


<form class="ask" method="post" action="" >
	    <textarea name="post_content" rows="5" cols="40" placeholder="what do you want to ask?" style="resize:none;width:50%;
	    height: 150px;border-radius:20px;border-color:dodgerblue; margin-left:40px; margin-bottom :0;font-size :1.5em;" ></textarea><br>
	    <input type="submit" name="ask" value="Submit">
</form>

<div style="overflow:auto; font-size : 2em;" >
	  <span> Questions' Gallary</span>

</div>

<div class = "question">

 

<ul style="list-style-type:none;";> 
<!-- I want your to calculate the day upon today and if the item is expired I want your application to make the font color red  -->
      

      <?php

        
        $func = new Discussion();
        $email = $_SESSION['valid_user'];
        //if(isset($_GET['more'])){
        //    $posts = $func->Discussion($email,true,$_GET['index']);
//}
        if(!empty($_GET['more']) && !empty($_GET['index'])){
            $posts = $func->Discussion($email,true,$_GET['index']);
          }
        else{
            $posts = $func->Discussion($email,false,0);
        }

        $offsetIndex = $func->currentPIndex;

        if(empty($posts)){
          echo "<span class='no_more'>You have seen all posts</span>";
        }
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

    $func = new Discussion();

     if(isset($_POST["ask"])){
       $post_content=$_POST['post_content'];
       $email = $_SESSION['valid_user'];
          
          if($post_content == null){
              echo "please write what is on your mind?";
            }
            else{
                //echo
                } 
            $posts = $func->askQuestion($post_content, $email);
            
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
       
      } 
?>
    

  </ul>
   <div class='seemore'>
        <center><?php echo "<a href='DiscussionPanel.php?more=yes&index=$offsetIndex'>" ?>See more</a></center>
         </div>
  <!--This is the form that is used to ask the question-->    
</div>

</div>

<?php include "footer2.php" ?>