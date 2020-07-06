<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "root";
$dbname = "instagram";
$username1=$_GET['username'];
$fname=$_GET['firstname'];
$lname=$_GET['lastname'];
$phoneNo=$_GET['phoneNumber'];
$password1=$_GET['password'];
$date=$_GET['bod'];
$dbemail=$_GET['mail'];
$img="images/image1.png";
// $img = $_FILES["image"]["name"] ;
// $tmp = $_FILES["image"]["tmp_name"] ;
// $errorimg = $_FILES["image"][“error”] ;

// $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); // valid extensions
// $path = 'uploads/'; // upload directory
// Create connection
echo"$username1,$fname,$lname,$phoneNo,$password1,$date,$dbemail";
$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// if(!empty($_GET['username']) || !empty($_GET['password']) || $_FILES['image'])
// {
    // $img = $_FILES['image']['name'];
    // $tmp = $_FILES['image']['tmp_name'];
    // // get uploaded file's extension
    // $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
    // // can upload same image using rand function
    // $final_image = rand(1000,1000000).$img;
    // // check's valid format
    // if(in_array($ext, $valid_extensions)) 
    // { 
    //     $path = $path.strtolower($final_image); 
    //     if(move_uploaded_file($tmp,$path)) 
    //     {
            // echo "<img src='$path' />";
            $sql = "INSERT INTO `insta`(`username`,`fname`,`lname`,`phone_no`,`password`,`dob`,`email`,`profile`) VALUES ('$username1','$fname','$lname', '$phoneNo','$password1','$date','$dbemail','$img');";
            
//         }
//     } 
//     else 
//     {
//         echo 'invalid';
//     }
// }
    
if (mysqli_query($conn, $sql)) {
    header("Location: instagram.html");
    $_SESSION["firstname"] = "$username1";
   echo "New record created successfully";

} else {
	echo"$username1";
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
