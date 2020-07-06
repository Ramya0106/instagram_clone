<?php
    session_start();
    $username=$_POST['uname'];
	$password=$_POST['pname'];
    $servername = "localhost";
	$dbusername = "root";
	$dbpassword = "root";
    $dbname = "instagram";
    $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
    if (!$conn) 
	{
	    	die("Connection failed: " . mysqli_connect_error());
    }
    else{
        echo"connected!";
    }
    $sql = "select username,password from insta where username='".$username."' and password='".$password."';";
    $result = mysqli_query($conn, $sql);
    echo"$username";
    if(mysqli_num_rows($result) >0) 
	{
            echo"9";
	//     	// output data of each row
	     	while($row = mysqli_fetch_assoc($result))
	 	{
             echo"9";
	 		if($row['username']==$username && $row['password']==$password)
	 		{
    //             //header("Location: loginpage.php");
                 echo"Done";
	// 			$_SESSION["firstname"] = "$username";
             }
             
             
         }

	 } 
     else 
     {	 
          header("Location:instagram.php");
             echo"yess";
     }

	 mysqli_close($conn);
?>
