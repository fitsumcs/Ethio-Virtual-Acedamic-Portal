<?php  
include "View/IndexHeader.php" ;

session_start();
if(isset($_SESSION['valid_user']))
 {
    Header('location: View/home.php');
 }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Home</title>

  </head>
  <body>
    <div class='main'>
    
  <div class="container" style="background-color: white;">
  	
    <div class="rows" >
    	<div class="col-sm-1"></div>
    	<div class="col-sm-4">
            <img src="image/left_image.jpg" alt = "left_image">
    		<div style="margin-top: 70%;">
    			
    		</div>
    	</div>
    	<div class="col-sm-1"></div>
    	<div class="col-sm-5" style="border:solid 2px beige;">
    			 <div class="col-sm-2"></div>
    			<div class="col-sm-6">
    				
    				<form role="form" class="form-horizontal" method="post" action="Controller/login.php">
    					<div class="form-group">
    						<label class="col-sm-4"><h2>Login</h2></label>
    					</div>
    					<div class="form-group">
    						<label  for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                        <input class = "form-control" id="emailsignup" name="emailid" required="required" type="email" 
                                    placeholder="mysupermail@mail.com" style="width:350px" />
                                </div>
              <div class="form-group"> 
                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                    <input class = "form-control" id="password" name="password" style="width:350px" required="required" type="password" placeholder="eg. X8df!90EO" /> 
    					</div>
    					<div class="form-group col-sm-offset-2 ">
    						<button type="submit" class="btn btn-primary"> Log in </button>
    					</div>
    					
    				</form>
    			<div class="col-sm-8">	
    			</div>
    			<div class="col-sm-4" style="margin-top: 8%">
    				<p>Not registered yet ?</p>
    				<a href="View/createAccount.php"><button class="btn btn-success">Create Account</button></a>
    			</div>
    			</div>
    		
    	</div>
        
        </div>


    	 <div class="rows" style="margin-top: 40%; border-top: 2px solid gray">
    	 <div class="col-sm-4"></div>

        
    	<div class="rows">
    		<?php include "View/IndexFooter.php" ?>
    	</div>
    </div>
    
    </div>
   
    	
    </div>


  </div>
</div>
  </body>