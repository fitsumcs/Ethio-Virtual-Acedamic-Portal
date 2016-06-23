<?php
		include "../Model/databas.php";
        
        $email = $_SESSION['valid_user'];
        $dept_sql = "select department from users where emailid  = '$email'";
        $dept_result = $conn->query($dept_sql);
        $dept="";
        if ($dept_result->num_rows > 0) {
            while($row = $dept_result->fetch_assoc()) {
                    $dept = $row["department"];
                  }
          }

        
        $field_sql = "select field from users where emailid  = '$email'";
        $field_result = $conn->query($field_sql);
        $field="";
        if ($field_result->num_rows > 0) {
            while($row = $field_result->fetch_assoc()) {
                    $field = $row["field"];
                    
                  }
          }

        $user_sql = "select username from users where emailid  = '$email'";
        $user_result = $conn->query($user_sql);
        $user="";
        if ($user_result->num_rows > 0) {
            while($row = $user_result->fetch_assoc()) {
                    $user = $row["username"];
                    
                  }
          }

        $university_sql = "select university from users where emailid  = '$email'";
        $university_result = $conn->query($university_sql);
        $university="";
        if ($university_result->num_rows > 0) {
            while($row = $university_result->fetch_assoc()) {
                    $university = $row["university"];
                    
                  }
          }
         


?>