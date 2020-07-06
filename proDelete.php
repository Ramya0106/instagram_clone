<?php
    session_start();
    //echo $_GET['Username'];
    // $username=$_GET['Username'];
    // $Password=$_GET['Password'];
    // echo"$username,$Password";
    $servername = "localhost";
	$dbusername = "root";
	$dbpassword = "root";
    $dbname = "instagram";
    $path="images/image1.png";
    $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
    if (!$conn) 
	{
	    	die("Connection failed: " . mysqli_connect_error());
    }
    // else{
    //     echo"connected!";
    // }
    $sql = "UPDATE insta SET profile='$path' WHERE username='".$_SESSION['firstname']."';";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result))
    {
        echo $row;
    }
?>