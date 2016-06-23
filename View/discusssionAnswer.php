<?php
		include "../Controller/functions.php";
    
		session_start();
		if(!$_SESSION['valid_user'])
		 //   Header('location:indexxx.php');
		echo 'You are logged in as: '.$_SESSION['valid_user'].' <br />';
	
?>

<html>
<head>
	<title>Discussion panel</title>
	<script src="../js/post.js"></script>
	
  <head>
    
    
    <link rel="stylesheet" type="text/css" href="../css/DiscussionPanelAns.css">
    
  </head>
</head>
<body>
 <nav> 
        <!-- Reserved for navigation-->
        <span style = "font-size : 3em;">Ethio Virtual Acedamic Portal</span>
        <pre>Ethio Virtual Acedamic Portal users Answers</pre>
    </nav>
<?php
  
   $func = new Discussion();

    if(isset($_POST["form_id"])){
        $po = $_POST["post_id"];
        $_SESSION['p_id'] = $po;
        $email = $_SESSION['valid_user'];
        //echo displayAnswer($po);
        $posts = $func->displayAnswer($po, $email);
        for ($i=0; $i < count($posts); $i++) { 
            $post = $posts[$i];
            ?>
             
             
             <li class = "formate" >
             <span><img src = "" width = "100px" height = "100px" alt = "image" style = "float : left"/></span>
             	<span style = "font-size:1.8em; margin-left:0;"> <?php  echo $post->name;?></span><br/>
                <span ><?php echo $post->university; ?>university</span><br/>
             	<span><?php echo $post->department; ?>Department</span><br/>
             	<span><?php echo $post->yearLevel; ?>Student</span>
             </li>

             
             <li class = "formate">
               <form  method = "post" action = "discusssionAnswer.php" >
                   <input style = "display:none;" name = "post_id" value = "<?php echo $post->id; ?>" >
                   <label  name ="form_id" class = "form_input" type = "text" value = "<?php echo $post->content; ?>"><?php echo $post->content; ?></labe>
               </form>
             </li>
           
<?php
           # code...
         }
         }

      
        
     if(isset($_POST["answer"])){
       $post_id = $_SESSION['p_id'];
       $ans=$_POST['message'];
       $email = $_SESSION['valid_user'];//used to get the email of the person using the website
          
          if($ans == null){
              echo "please write what is on your mind?";
            }
            else{
                //echo 
            $posts = $func->insertAnswer($post_id, $email, $ans);
            for ($i=0; $i < count($posts); $i++) { 
              $post = $posts[$i];
              ?>
             
             
             <li class = "formate" >
             <span><img src = "" width = "100px" height = "100px" alt = "image" style = "float : left"/></span>
              <span style = "font-size:1.8em; margin-left:0;"> <?php  echo $post->name;?></span><br/>
                <span ><?php echo $post->university; ?>university</span><br/>
              <span><?php echo $post->department; ?>Department</span><br/>
              <span><?php echo $post->yearLevel; ?>Student</span>
             </li>

             
             <li class = "formate">
               <form  method = "post" action = "discusssionAnswer.php" >
                   <input style = "display:none;" name = "post_id" value = "<?php echo $post->id; ?>" >
                   <label name ="form_id" class = "form_input" type = "text" value = "<?php echo $post->content; ?>">
                   <?php echo $post->content; ?></label> 
               </form>
             </li>
           
<?php
           # code...
         }
  }
}

?>

  <form id = "popup"  method="post">
      <h2>Post your answer</h2>
      
      <textarea id="msg" name="message" placeholder="please write your answer on me"></textarea>
      <input type="submit" name="answer"  id="submit" value="Post">
      <input type="submit" name="upload" id = "submit" value="Upload">
      
    </form>
</body>
</html>
