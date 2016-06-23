<?php  include "IndexHeaderC.php" ?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/Bootstrap/bootstrap.css">
    <script src= "../js/validation.js"></script>
    <title>Create Account</title>

  </head>
  <body>
    <div class='main'>
  <div class="container" style="background-color: white">
    	<a href="../indexx.php"><button class="btn btn-success">Sign in</button></a>
      

     <div class="rows">
      
         <div class="col-sm-2"></div>
        <div class="col-sm-6">
         
          <form id="registrationForm" class="form-horizontal" role="form" method="post" action="../Controller/register.php" name="register">
            
            <div class="form-group">
              <label class="control-label">Your Name: </label>
              <input class= "form-control" id="usernamesignup" name="username" required="required" type="text" placeholder="mysuperusername690" />
            </div>
            
            <div class="form-group">
              <label class="control-label" for="emailsignup"  data-icon="e" > Your email</label>
              <input class= "form-control"  id="emailsignup" name="emailid" required="required" type="email" placeholder="mysupermail@mail.com"/> 
            </div>

            <div class="form-group">
               <label for="passwordsignup" class="control-label" data-icon="p">Your password </label>
              <input class= "form-control" id="passwordsignup" name="password" required="required" type="password" placeholder="eg. X8df!90EO" onkeyup="return passwordChanged();" />
              <label name = "checkpwd" id = "checkpwd"></label>

            </div>


            <div class="form-group">
               <label for="passwordsignup_confirm" class="control-label" data-icon="p">Please confirm your password </label>
                                    <input class= "form-control" id="passwordsignup_confirm" name="confirm_password" required="required" type="password" disabled = "true" placeholder="eg. X8df!90EO" onkeyup="return passwordMatch();"  />
                                    <label name = "checkpwd" id = "matchpwd"></label>
            </div>

            <div class="form-group">
                <label class="control-label">Select Your Role</label><br/>
                <input type="radio" name="role" value="university"  onclick="show_univ();" required> University
                                      <input type="radio" name="role" value="highschool" onclick = "hide_univ();" required> HighSchool
                                      <input  type="radio" name="role" value="Instructor" onclick = "hide_univ()" required> Instructor

                                      
                                
            </div>
            

            <div id = "university" style="display:none;">
            
            <div class = "form-group">
                                    <label class="control-label">University</label>
                                    <select class= "form-control" id="selectUniversity" class = "form-control"  name = "university">
                                              <option class= "form-control" >Choose your unversity</option>
                                    </select>
                                    <script>
                                      var select = document.getElementById("selectUniversity"); 
                                      var options = ["Addis Ababa", "Jimma", "Adama", "Bahardar", "Ambo", "Hawasa", "Harameya", "Welaga", "Mekele"]; 
                                      for(var i = 0; i < options.length; i++) {
                                          var opt = options[i];
                                          select.innerHTML += "<option value=\"" + opt + "\">" + opt + "</option>";

                                      }
                                      </script>


            </div>

          <div class="form-group">

                               
                                    <label class="control-label">Field Of Study</label>
                               
                                    <select class= "form-control" id="selectField"  name = "field" onclick="show_dept()">
                                              <option class= "form-control" >Choose your of Study</option>
                                    </select>
                                    <script>
                                      var select = document.getElementById("selectField"); 
                                      var options = ["Enginering", "Health Related", "Social Science", "Computational Science", "Agriculture"]; 
                                      for(var i = 0; i < options.length; i++) {
                                          var opt = options[i];
                                          select.innerHTML += "<option value=\"" + opt + "\">" + opt + "</option>";

                                      }
                                      
                                      </script>

                                </div>

                                <div class="form-group" style="display:none" id = "department">
                                    
                                    <label class="control-label">DEPARTMENT</label>
                               
                                    <select class= "form-control" id="selectDepartment"  name = "department">
                                              <option class= "form-control">Choose your Departement</option>
                                    </select>
                                    <script>
                                      var select = document.getElementById("selectDepartment"); 
                                      var options = ["SoftWare", "Civil", "Electrical", "Mechanical", "Chemical", "Biomedical"]; 
                                      for(var i = 0; i < options.length; i++) {
                                          var opt = options[i];
                                          select.innerHTML += "<option value=\"" + opt + "\">" + opt + "</option>";

                                      }
                                      </script>
                                    

                                </div>  
          

                                <div class="form-group">
                                    
                                    <label class="control-label">YEAR LEVEL</label>
                                    <select  class= "form-control"id="yearLevel"  name = "year">
                                              <option class= "form-control" >Choose your Year Level</option>
                                    </select>
                                    <script>
                                      var select = document.getElementById("yearLevel"); 
                                      var options = ["1st year", "2nd year", "3rd year", "4th year", "5th year"]; 
                                      for(var i = 0; i < options.length; i++) {
                                          var opt = options[i];
                                          select.innerHTML += "<option value=\"" + opt + "\">" + opt + "</option>";

                                      }
                                      </script>

                                    

                                </div> 
             </div>

         

            <div class="form-group">
              <input type="checkbox" name="agreement" required> &nbsp &nbsp I Accept the policies terms and agreement under this website<br>
            </div>


            <div class="form-group col-sm-4">
              <button class="btn btn-primary" type="submit">Create</button>
              <label id = "check"></label>
            </div>
            
          </form>

        </div>
       <div class="col-sm-3">
               
        </div>
       
        
     </div>
      <div class="col-sm-12">
        <?php  include "footer2.php" ?>
      </div>
    
  </div>
</div>

  <script>
                function show_univ(){
                    var univ = document.getElementById("university"); 
                    univ.style.display = "block";
                }
                function hide_univ(){
                    var univ = document.getElementById("university"); 
                    univ.style.display = "none";
                }

                function show_dept(){
                  var select = document.getElementById("selectField").value;
                  var dept = document.getElementById("department");
                  if(select == "Enginering"){
                    dept.style.display = "block";
                  } 
                  else{
                    dept.style.display = "none";
                  }
                  
                }
            </script>
  </body>
  </html>
  