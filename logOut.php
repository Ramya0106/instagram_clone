<?php
    session_start();
    //$username =  $_GET['username'];
    if($_SESSION["firstname"]==NULL)
     {
       header("Location:instagram.html");
     }
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy();
header("Location:instagram.html"); 
?>

</body>
</html>
