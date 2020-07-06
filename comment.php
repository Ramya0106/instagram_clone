<?php
    session_start();
    $username=$_SESSION['firstname'];
    $id=$_POST['value'];
    $time=date('Y-m-d H:i:s', time());
    $action=$_POST['message'];
    $flag="0";

    $servername = "localhost";
	$dbusername = "root";
	$dbpassword = "root";
    $dbname = "instagram";
 
    $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
    if (!$conn) 
	{
	    die("Connection failed: " . mysqli_connect_error());
    }
    echo"hii";
    $sql="SELECT post_cmnt from insta_pics where pics='$id'; ";
    if(mysqli_query($conn,$sql))
    {
        echo"hii";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result))
        {
            echo"hii";
            $json=$row['post_cmnt'];
            //echo $json."<br>";
            $decode_json=json_decode($json);
        //echo $decode_json."<br>";
            $decode_json[] = ['username' => $username, 'cmnt' => $action,'time'=>$time,'flag'=>$flag];
            $json1 = json_encode($decode_json);
            echo $json1;
            // foreach($decode_json as $likes)
            // {
            //     foreach($likes as $key=>$value)
            //     {
            //         echo "KEY: ".$key."&nbsp&nbspVALUE:  ".$value."</br>";
            //     }
            // }
        }
        
    }
    
    $sql1="UPDATE insta_pics set post_cmnt='$json1' where pics='$id';";
    mysqli_query($conn,$sql1);
?>