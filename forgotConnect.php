<?php
    session_start();
    $username=$_GET['username'];
	$date=$_GET['date'];
    $servername = "localhost";
	$dbusername = "root";
	$dbpassword = "root";
    $dbname = "instagram";
    $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
    if (!$conn) 
	{
	    	die("Connection failed: " . mysqli_connect_error());
    }
    // else{
    //     echo"connected!";
    // }
    $sql = "select username,dob from insta where username='".$username."' and dob='".$date."';";
    $result = mysqli_query($conn, $sql);
    //echo"$username";
    //echo"$date";
    if(mysqli_num_rows($result) >0) 
	{
          //  echo"9";
	//     	// output data of each row
	     	while($row = mysqli_fetch_assoc($result))
	 	{
            // echo"9";
	 		if($row['username']==$username && $row['dob']==$date)
	 		{
                header("Location:forgotPS1.html");
              //   echo"Done";
	// 			$_SESSION["firstname"] = "$username";
             }
             
             
         }

	 } 
     else 
     {	 
        
        echo '<script>alert("UserID OR Date is Wrong")</script>';
        //header("Location:forgotPS.php");    
     }

	 mysqli_close($conn);
?>
