<?php
    $username=$_GET['username'];
    $password=$_GET['password'];
    $servername = "localhost";
	$dbusername = "root";
	$dbpassword = "root";
    $dbname = "instagram";
    $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
    if (!$conn) 
	{
	    	die("Connection failed: " . mysqli_connect_error());
    }
     //echo"$username";
     //echo"$password";
     echo"$confirm";
     $sql = "UPDATE insta SET password='".$password."' WHERE username='".$username."'";
     if(mysqli_query($conn, $sql)){
         header("Location:instagram.html");
     } 
     else 
     {
         echo("not changed");
     }
     mysqli_close($conn);
?>