<?php
    session_start();
    $username=$_SESSION['firstname'];
    $action=$_POST['action'];
    $post_pics=$_POST['post_pics'];
    $time=date('Y-m-d H:i:s', time());
    $flag="0";

    $servername = "localhost";
	$dbusername = "root";
	$dbpassword = "root";
    $dbname = "instagram";

    // $saved_data =array( 
    //     array("username"=> '1',"action"=> 'like',"time" => 'data') ,
    //     array("username"=> $username,"action"=> $action,"time" => $time) ,
    // );
    
    $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
    if (!$conn) 
	{
	    die("Connection failed: " . mysqli_connect_error());
    }
    if($action=="like")
    {
        $sql="SELECT post_like from insta_pics where pics='$post_pics'; ";
        if(mysqli_query($conn,$sql))
        {
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result))
            {
            // echo"hii";
                $json=$row['post_like'];
                //echo $json."<br>";
                $decode_json=json_decode($json);
            //echo $decode_json."<br>";
                $decode_json[] = ['username' => $username, 'action' => $action,'time'=>$time, 'flag'=>$flag];
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
        
        $sql1="UPDATE insta_pics set post_like='$json1' where pics='$post_pics';";
        mysqli_query($conn,$sql1);
    }
    else
    {
        $sql = "SELECT post_like from insta_pics where pics='$post_pics'; ";
        if(mysqli_query($conn,$sql))
        {
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result))
            {
                $data=$row['post_like'];
                echo $data."</br>";
                $json_arr = json_decode($data, true);

                // get array index to delete
                $arr_index = array();
                foreach ($json_arr as $key => $value)
                {
                    if ($value['username'] == $username)
                    {
                        $arr_index[] = $key;
                    }
                }

                // delete data
                foreach ($arr_index as $i)
                {
                    unset($json_arr[$i]);
                }

                // rebase array
                $json_arr = array_values($json_arr);

                // encode array to json and save to file
                $f= json_encode($json_arr);
                echo"yess";
                echo $f;
                $sql2="UPDATE insta_pics set post_like='$f' where pics='$post_pics';";
                mysqli_query($conn,$sql2);
            }
        }
    }
?>