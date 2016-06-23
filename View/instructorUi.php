
<html>
<head>
    <title></title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="../css/share.css">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    
</head>


<body>
    <?php include("IndexheaderC.php"); ?>
<br><br><br><br><br><br><br><br><br>
        <div class = "left_section"> 
            <ul>
            <li> <a href="home.php"> Home </a> </li>
            <li> <a href="DiscussionPanel.php"> Discussion Panel</a> </li>
            <li> <a href="exersiseView.php"> Share Material </a> </li>
            <li> <a href=""> Assignment Submission </a> </li>
            
        </ul>
        
        </div>
         <div class = "search">
            <form action="search.php" method="GET">
                <input type="text" placeholder="Persuit knowledge !" name='search' required="required"/>
                <input style="background-color:green;color:white; width:100px;"type="submit" value="search" name="submit" />
                 <a href="../Controller/logout.php" style="float:right;margin-left :80px;position : relative; top : -6px;"> log out</a>
            </form>
        </div>
     
   
        