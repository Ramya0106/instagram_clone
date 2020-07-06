<?php
    session_start();
    //echo $_GET['Username'];
    $username=$_GET['Username'];
    $Password=$_GET['Password'];
    echo"$username,$Password";
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
    $sql = "select username,password from insta where username='".$username."' and password='".$Password."';";
    $result = mysqli_query($conn, $sql);
    echo"$username";
     if(mysqli_num_rows($result) >0) 
	 {
             echo"9";
	     	// output data of each row
	      	while($row = mysqli_fetch_assoc($result))
	  	{
              echo"9";
	  		if($row['username']==$username && $row['password']==$Password)
	  		{
                  
                  //header("Location:instagram1.php?username=".$username);
                  header("Location:instagram1.php");
                  echo"Done";
	  			 $_SESSION["firstname"] = "$username";
              }
             
             
          }

	  } 
      else 
      {	 
           header("Location:instagram.html");
      }

      mysqli_close($conn);
    ?>
