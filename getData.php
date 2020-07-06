<?php
session_start();
$servername = "localhost";
$dbusername = "root";
$dbpassword = "root";
$dbname = "instagram";

$name=$_SESSION['image_path'];
echo $name;
// Create connection
$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "SELECT pics FROM insta_pics WHERE username = '".$_SESSION["firstname"]."';";
// $sql = "SELECT pics,profile FROM insta_pics,insta WHERE username = '".$_SESSION["firstname"]."';";
$sql = "select pics,profile from insta,insta_pics where insta.username=insta_pics.username and insta.username='".$_SESSION["firstname"]."';";

$sql1 = "select count(username) from insta_following where following='".$_SESSION['firstname']."' group by following;";
$sql2 = "select count(following) from insta_following where username='".$_SESSION['firstname']."' group by username;";
$sql3 = "select count(pics) from insta_pics where username='".$_SESSION['firstname']."';";
$sql4 = "select fname from insta where username='".$_SESSION['firstname']."'; ";
$sql5 = "select username,profile from insta where username not in(select username from insta where username='".$_SESSION['firstname']."');";

$sql6 = "select profile from insta where username='".$_SESSION['firstname']."'; ";
$sql7 = '(select insta_pics.username,pics,profile,posted_timing,post_like,post_cmnt from insta,insta_pics where insta.username=insta_pics.username  and insta_pics.username ="'.$_SESSION['firstname'].'") union (select insta_pics.username,pics,profile,posted_timing,post_like,post_cmnt from insta,insta_pics where insta.username=insta_pics.username  and insta_pics.username in(select following from insta_following where username="'.$_SESSION['firstname'].'"))order by posted_timing desc;';
$sql8 =  "select insta.username,profile,pics,post_like,post_cmnt from insta,insta_pics where insta.username=insta_pics.username and insta.username='".$_SESSION['firstname']."';";
// '(select insta_pics.username,pics,profile from insta,insta_pics where insta.username=insta_pics.username  and insta_pics.username ="'.$_SESSION['firstname'].'") union (select insta_pics.username,pics,profile from insta,insta_pics where insta.username=insta_pics.username  and insta_pics.username in(select following from insta_following where username="'.$_SESSION['firstname'].'"));';




if (mysqli_query($conn, $sql) and mysqli_query($conn,$sql1) and mysqli_query($conn,$sql2) and mysqli_query($conn,$sql3)) {
    $result = mysqli_query($conn, $sql);
    $result1 = mysqli_query($conn,$sql1);
    $result2 = mysqli_query($conn,$sql2);
    $result3 = mysqli_query($conn,$sql3);
    $result4 = mysqli_query($conn,$sql4);
    $result5 = mysqli_query($conn,$sql5);
    $result6 = mysqli_query($conn,$sql6);
    $result7 = mysqli_query($conn,$sql7);
    $result8 = mysqli_query($conn,$sql8);
    // $row = mysqli_fetch_assoc($result);
    // echo json_encode(array('images'=>$row['pics']));
    
    //$i=0;
    $response = array();
    while ($row = mysqli_fetch_assoc($result)){

        $pics=$row['pics'];
        $profile=$row['profile'];        
        $response['data']['images'][] = array(
            "pics" =>   $row["pics"], 
        );
    }
        // $response1['data']['count'][] = array(
        //     "followers" => $followers
        // );
        // $i = $i+1;
        while($row1 = mysqli_fetch_assoc($result1))
        {
            $followers=$row1['count(username)'];
            $response['data']['count'] = array(
                "followers" => $followers  
            );

        }

        while($row2 = mysqli_fetch_assoc($result2))
        {
            $following=$row2['count(following)'];
            $response['data']['count_following'] = array(
                "following" => $following  
            );

        }

        while($row3 = mysqli_fetch_assoc($result3))
        {
            $post=$row3['count(pics)'];
            $response['data']['count_pics'] = array(
                "post" => $post  
            );

        }

        while($row4 = mysqli_fetch_assoc($result4))
        {
            $fname = $row4['fname'];
            $response['data']['first'] = array(
                "fname" => $fname
            );
        }

        while($row5 = mysqli_fetch_assoc($result5))
        {
            $frnds_username = $row5['username'];
            $frnds_profile = $row5['profile'];
            $response['data']['info'][] = array(
                "frnds_username" =>  $frnds_username,
                "frnds_profile" => $frnds_profile
            );
        }

        while($row6 = mysqli_fetch_assoc($result6))
        {
            $profile = $row6['profile'];
            $response['data']['profile'] = array(
                "dp" => $profile
            );
        }
        
        while($row7 = mysqli_fetch_assoc($result7))
        {
            $username1 = $row7['username'];
            $pics1 = $row7['pics'];
            $profile1 = $row7['profile'];
            $time = $row7['posted_timing'];
            $post_like = $row7['post_like'];
            $post_cmnt =$row7['post_cmnt'];
            $response['data']['feed'][] = array(
                "username1" =>  $username1,
                "pics1" => $pics1,
                "profile1" => $profile1,
                "time" => $time,
                "post_like" => $post_like,
                "post_cmnt" => $post_cmnt
            );
        }

        $Activity_Array = array();
        $count = 0;
        while($row8 = mysqli_fetch_assoc($result8))
        {
            $pics3 = $row8['pics'];
            $flag =0;
            $notification_like = $row8['post_like'];
            //echo $notification_like."<br>";
            $Decode_notification_like = json_decode($notification_like,true);
            //echo"decode data".$Decode_notification_like."<br>";
            foreach($Decode_notification_like as &$a){
                if($a['flag'] == 0){
                    $a['flag'] = 1;
                    $count = $count +1;
                    $flag =1;
                }
            }
            $encode_notification_like = json_encode($Decode_notification_like);
            //echo $encode_notification_like."<br>";
            if($flag == 1)
            {
                $sql_noti = "UPDATE insta_pics set post_like='$encode_notification_like' where pics='$pics3'; ";
                mysqli_query($conn, $sql_noti);
            }
            //echo $count."<br>".$flag."<br>";



            $post_like3 = $row8['post_like']; 
            $decode_like = json_decode($post_like3);
            $i=0;
            foreach($decode_like as $Done){
                $decode_like[$i]->pics3=$row8['pics'];
                $i=$i+1;
            }
            $encode_like = json_encode($decode_like);
            
            

            $flag_cmnt =0;
            $notification_cmnt = $row8['post_cmnt'];
            //echo $notification_cmnt."<br>";
            $Decode_notification_cmnt = json_decode($notification_cmnt,true);
            //echo"decode data".$Decode_notification_cmnt."<br>";
            foreach($Decode_notification_cmnt as &$a){
                if($a['flag'] == 0){
                    $a['flag'] = 1;
                    $count = $count +1;
                    $flag_cmnt =1;
                }
            }
            $encode_notification_cmnt = json_encode($Decode_notification_cmnt);
            //echo $encode_notification_cmnt."<br>";
            if($flag_cmnt == 1)
            {
                $sql_noti1 = "UPDATE insta_pics set post_cmnt='$encode_notification_cmnt' where pics='$pics3'; ";
                mysqli_query($conn, $sql_noti1);
            }





            $post_cmnt3 = $row8['post_cmnt'];
            $decode_cmnt = json_decode($post_cmnt3);
            $j=0;
            foreach($decode_cmnt as $Done){
                $decode_cmnt[$j]->pics3=$row8['pics'];
                $j=$j+1;
            }
            $encode_cmnt = json_encode($decode_cmnt);
            
            
            $Activity_Array1=json_decode($encode_like,true);
            $Activity_Array2=json_decode($encode_cmnt,true);
            if($Activity_Array3 == null)
            {
                $Activity_Array3 =array_merge_recursive( $Activity_Array1,$Activity_Array2);
                $Activity_Array_Done = json_encode($Activity_Array3);
                
            }
            else
            {
                $Activity_Array3 =array_merge_recursive($Activity_Array3, $Activity_Array1,$Activity_Array2);
                $Activity_Array_Done = json_encode($Activity_Array3);
            }

        }
        $response['data']['activity'] = array(
            "UnSorted_Activity" => $Activity_Array_Done
            
        );
        $response['data']['notification'] = array(
            "notification_count" => $count
        );
        
    echo json_encode($response);
}
else {
    echo "issue in query";
}

mysqli_close($conn);
?>
