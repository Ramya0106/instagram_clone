<?php
    session_start();
    $username=$_SESSION['firstname'];
    $following=$_POST['section'];
    $followers=$_POST['section'];
    //echo $following;
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
    $sql = "INSERT INTO `insta_following`(`username`,`following`) VALUES ('$username','$following');";
    // $sql1 = "INSERT INTO `insta_followers`(`username`,`followers`) VALUES ('$followers','$username');";

    if (mysqli_query($conn, $sql)) {
        echo $sql;
    }
    mysqli_close($conn);
?>