<?php  include "header.php" ?>
<header><link rel="stylesheet" type="text/css" href="../css/browseContentByCatagory.css"></header>

<div class="contianer">
<div class="dropdown">
  <button class="dropbtn">ENGINERING</button>
  <div class="dropdown-content">
    <form method="POST" action = "browseContent.php">
      <input type = "submit" name = "dept" value = "SOFTWARE"><br>
      <input type = "submit" name = "dept" value = "CIVIL"><br>
      <input type = "submit" name = "dept" value = "ELECTRICAL"><br>
      <input type = "submit" name = "dept" value = "MECHANICAL"><br>
      <input type = "submit" name = "dept" value = "BIOMEDICAL"><br>
      <input type = "submit" name = "dept" value = "CHEMICAL"><br>
   </form>
     
  </div>

</div>
<div class="dropdown">
  <button class="dropbtn">HEALTH RELATED</button>
  <div class="dropdown-content">
    <form method="POST" action = "browseContent.php">
      <input type = "submit" name = "dept" value = "MEDICINE"><br>
      <input type = "submit" name = "dept" value = "DENTAL"><br>
      <input type = "submit" name = "dept" value = "HELATH OFFICER"><br>
      <input type = "submit" name = "dept" value = "NURSING"><br>
      <input type = "submit" name = "dept" value = "NIDWIFER"><br>
      <input type = "submit" name = "dept" value = "INESTASIAN"><br>
   </form>
     
  </div>

</div>
<div class="dropdown">
  <button class="dropbtn">SOCIAL SCIENCE</button>
  <div class="dropdown-content">
    <a href="#">POLOTICAL</a>
    <a href="#">SOCIAL WORK</a>
    <a href="#">BUSSINESS AND ECONOMICS</a>
    <a href="#">LANGUAGE STUDIES</a>
    <a href="#">PHILOSOPHY</a>
    <a href="#">POLOTICAL</a>
    <a href="#">SOCIAL WORK</a>

     
  </div>

</div>
<div class="dropdown">
  <button class="dropbtn">COMPUTATIONAL </button>
  <div class="dropdown-content">
    <form method="POST" action = "browseContent.php">
      <input type = "submit" name = "dept" value = "PHYSICS"><br>
      <input type = "submit" name = "dept" value = "CHEMISTRY"><br>
      <input type = "submit" name = "dept" value = "ELECTRICAL"><br>
      <input type = "submit" name = "dept" value = "MECHANICAL"><br>
      <input type = "submit" name = "dept" value = "BIOMEDICAL"><br>
      <input type = "submit" name = "dept" value = "CHEMICAL">
   </form>
  </div>

</div>
</div>
<?php include "footer2.php" ?>
