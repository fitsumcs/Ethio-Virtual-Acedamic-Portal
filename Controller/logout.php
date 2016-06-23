
<?php
//header(Location : "indexxx.html");
session_start();
unset($_SESSION['valid_user']);
session_destroy();

header("Location: ../indexx.php"); 
exit;
?>
