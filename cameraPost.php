<?php
session_start();
$servername = "localhost";
$dbusername = "root";
$dbpassword = "root";
$dbname = "instagram";
// Create connection
$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); // valid extensions
$path = 'uploads/'; // upload directory

if($_FILES['image'])
{
    $img = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];
    $username=$_SESSION['firstname'];
    echo "name:".$img;
    // get uploaded file's extension
    $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
    // can upload same image using rand function
    $final_image = rand(1000,1000000).$img;
    // check's valid format
    if(in_array($ext, $valid_extensions)) 
    {  
        $path = $path.strtolower($final_image);
        
        if(move_uploaded_file($_FILES['image']['tmp_name'],$path)) 
        {
            // $sql = "select  SET profile='$path' WHERE username='".$_SESSION['firstname']."';";
            $sql = "INSERT INTO `insta_pics`(`username`,`pics`) VALUES ('$username','$path');";

            if (mysqli_query($conn, $sql)) {
                
                //  echo "Record updated successfully";
                
            } 
            else {
                echo "Error updating record: " . mysqli_error($conn);
            }

         }
    } 
    else 
    {
        echo 'invalid';
    }
}
else{
    echo "FILE FIELD EMPTY";
}


mysqli_close($conn);
?>