<?php
// $json = '{
//    "startAt":0,
//    "issue":[
//       {
//          "id":"51526",
//          "fields":{
//             "people":[
//                {
//                   "name":"bob",
//                   "emailAddress":"bob@gmail.com",
//                   "displayName":"Bob Smith"
//                },
//                {
//                   "name":"john",
//                   "emailAddress":"john@gmail.com",
//                   "displayName":"John Smith"
//                }
//             ],
//             "skill":{
//                "name":"artist",
//                "id":"1"
//             }
//          }
//       },
//       {
//          "id":"2005",
//          "fields":{
//             "people":[
//                {
//                   "name":"jake",
//                   "emailAddress":"jake@gmail.com",
//                   "displayName":"Jake Smith"
//                },
//                {
//                   "name":"frank",
//                   "emailAddress":"frank@gmail.com",
//                   "displayName":"Frank Smith"
//                }
//             ],
//             "skill":{
//                "name":"writer",
//                "id":"2"
//             }
//          }
//       }
//    ]
// }';
// $decoded_array = json_decode($json)->{'issue'};
// foreach($decoded_array as $issue){
//     echo "hi<br>";
// 	foreach($issue->{'fields'}->{'people'} as $people){
// 		echo $people->{'emailAddress'}."<br/>";
// 	}
// }

echo "TRYING OUR DATA<br></br>";
// $json2='[[{"username":"Ramya01","action":"like","time":"2020-05-25 14:23:08"},{"username":"Mansi1","action":"like","time":"2020-05-25 14:23:38"},{"username":"Lasya1","action":"like","time":"2020-05-25 14:35:30"}],[{"username":"Ramya01","cmnt":"","time":"2020-05-27 17:11:52"},{"username":"Ramya01","cmnt":"thank you","time":"2020-05-28 17:22:07"}],[{"username":"Ramya01","action":"like","time":"2020-05-27 14:32:48"},{"username":"Mansi1","action":"like","time":"2020-05-27 16:21:19"}],[{"username":"Mansi1","cmnt":"NICE","time":"2020-05-27 16:18:06"},{"username":"Ramya01","cmnt":"NICE","time":"2020-05-27 16:23:07"},{"username":"Lasya1","cmnt":"NICE","time":"2020-05-27 16:24:51"}]]';

// $json2 = '{
//     "likes":[
//         {"username":"Mansi1","action":"like","time":"2020-05-23 17:13:28"},
//         {"username":"c","action":"like","time":"cjxhc"}
//         ] 
//     }';
//     echo $json2;
// $decoded_array2 = json_decode($json2)->{'likes'};
// //echo $decoded_array2;
// foreach($decoded_array2 as $likes){//Iterating like
//     foreach($likes as $key => $value){
//         echo "KEY: ".$key."&nbsp&nbspVALUE:  ".$value."</br>";
//     }
// }




// $data='[{"id":"8488","name": "Tenby","area": "Area1"},{"id": "8489","name": "Harbour","area": "Area1"},{"id": "8490","name": "Mobius","area": "Area1"}]'; 
// $data = '[[{"username":"Ramya01","action":"like","time":"2020-05-25 14:23:08"},{"username":"Mansi1","action":"like","time":"2020-05-25 14:23:38"},{"username":"Lasya1","action":"like","time":"2020-05-25 14:35:30"}],[{"username":"Ramya01","cmnt":"","time":"2020-05-27 17:11:52"},{"username":"Ramya01","cmnt":"thank you","time":"2020-05-28 17:22:07"}],[{"username":"Ramya01","action":"like","time":"2020-05-27 14:32:48"},{"username":"Mansi1","action":"like","time":"2020-05-27 16:21:19"}],[{"username":"Mansi1","cmnt":"NICE","time":"2020-05-27 16:18:06"},{"username":"Ramya01","cmnt":"NICE","time":"2020-05-27 16:23:07"},{"username":"Lasya1","cmnt":"NICE","time":"2020-05-27 16:24:51"}]]';
// $data[0]['id']="8488";
// $data[0]['name']="Tenby";
// $data[0]['area']="Area1";

// $data[1]['id']="8489";
// $data[1]['name']="Harbour";
// $data[1]['area']="Area1";

// $data[2]['id']="8490";
// $data[2]['name']="Mobius";
// $data[2]['area']="Area1";
// echo $data."<br>";
// // echo json_decode($data)."<br/>";
// $decoded_array2 = json_decode($data);
// $i=0;
//    // echo $decoded_array2;
//     foreach($decoded_array2 as $likes){//Iterating like
//       foreach($likes as $key => $value){
//          $likes[$i]->image="1280.jpg";

//    //       echo "KEY: ".$key."&nbsp&nbspVALUE:  ".$value."</br>";
//    //       //$likes['image']="1280.jpg";
//    //       //echo"hii";
//    //          // $decoded_array2 -> image="1278.jpg";
//    $i=$i+1;
//       }
     
//  }

/*Add Image element (or whatever) into the array according to your needs*/

// $data[0]['image']="1278.jpg";
// $data[1]['image']="1279.jpg";
// $data[2]['image']="1280.jpg";

// echo json_encode($decoded_array2)."<br>";
// echo jso$data;


// $arr = '[{"username":"Ramya01","action":"like","time":"2020-05-24 10:53:03"},{"username":"Mansi1","action":"like","time":"2020-05-24 13:39:06"},{"username":"Mansi1","action":"like","time":"2020-05-24 13:41:39"},{"username":"Ramya01","action":null,"time":"2020-05-24 19:24:26"}]';
// $arr = json_decode($arr, TRUE);
// foreach($arr as $username){
//    foreach($username as $key => $value){
//       echo $username['action'].'</br>';

//    }
// }
//echo $arr;
// $arr[] = ['id' => '9999', 'name' => 'Name'];

// $json = json_encode($arr);

// echo '<pre>';
// print_r($json);
// echo '</pre>';

// $data = '[
//    {
//        "Code": "1",
//        "Name": "June Zupers",
//        "Sports": "Base Ball"
//    },
//    {
//        "Code": "2",
//        "Name": "Fred Cortez",
//        "Sports": "Soccer"
//    },
//    {
//        "Code": "3",
//        "Name": "Kevin Burks",
//        "Sports": "Tennis"
//    }
// ]';

//delete
//$data='[{"username":"Ramya01","action":"like","time":"2020-05-24 10:53:03"},{"username":"Mansi1","action":"like","time":"2020-05-24 13:39:06"},{"username":"Mansi1","action":"like","time":"2020-05-24 13:41:39"}] ';
// $servername = "localhost";
// $dbusername = "root";
// $dbpassword = "root";
// $dbname = "instagram";

// $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
// if (!$conn) 
// {
//    die("Connection failed: " . mysqli_connect_error());
// }
// $sql = "SELECT post_like from insta_pics where id='1'; ";
// if(mysqli_query($conn,$sql))
// {
//    $result = mysqli_query($conn, $sql);
//    while($row = mysqli_fetch_assoc($result))
//    {
//       $data=$row['post_like'];
//       echo $data."</br>";
//       $json_arr = json_decode($data, true);

//       // get array index to delete
//       $arr_index = array();
//       foreach ($json_arr as $key => $value)
//       {
//          if ($value['username'] == "Ramya01")
//          {
//             $arr_index[] = $key;
//          }
//       }

//       // delete data
//       foreach ($arr_index as $i)
//       {
//          unset($json_arr[$i]);
//       }

//       // rebase array
//       $json_arr = array_values($json_arr);

//       // encode array to json and save to file
//       $f= json_encode($json_arr);
//       echo"yess";
//       echo $f;
//       $sql2="UPDATE insta_pics set post_like='$f' where id='1';";
//       mysqli_query($conn,$sql2);
//    }
// }


//MERGE ARRAY
// $array1 = '[{ "id" : "1", "username" : "James", "access_level" : "1" },{"id":89,"username":"hasad"}]';

// $array1 = '[{

// "id" : "1",

// "username" : "James",

// "access_level" : "1"

// }';

//Second JSON array

// $array2 = '[{ "id" : "2", "username" : "Micheal", "access_level" : "2" }]';

// $array2 = '{

// "id" : "2",

// "username" : "Micheal",

// "access_level" : "2"

// }';
// echo"MERGE<br>";
// $users = array();

// $d1=json_decode($array1,true);
// echo"first object";
// echo $users;
// $d2=json_decode($array2,true);

// $merge_user = array_merge_recursive($d1,$d2);
// print_r( $merge_user )."<br>";
// echo json_encode ($merge_user);







// $json = '[{
//    "sku": "5221",
//    "qty": 1,
//    "price": 17.5,
//    "desc": "5395 - Replenish Natural Hydrating Lotion 3.5oz"
// }, {
//    "sku": "11004",
//    "qty": 1,
//    "price": 30.95,
//    "desc": "150 - Q-Plus 16oz"
// }]';
$json = '[{"username":"Ramya01","action":"like","time":"2020-05-25 14:23:08","flag":"1","pics3":"uploads\/433305img-20180729-wa0013.jpg"},{"username":"Lasya1","action":"like","time":"2020-05-25 14:35:30","flag":"1","pics3":"uploads\/433305img-20180729-wa0013.jpg"},{"username":"Mansi1","action":"like","time":"2020-06-04 12:38:42","flag":"0","pics3":"uploads\/433305img-20180729-wa0013.jpg"},{"username":"Ramya01","cmnt":"","time":"2020-05-27 17:11:52","flag":"1","pics3":"uploads\/433305img-20180729-wa0013.jpg"},{"username":"Ramya01","cmnt":"thank you","time":"2020-05-28 17:22:07","flag":"1","pics3":"uploads\/433305img-20180729-wa0013.jpg"},{"username":"Ramya01","action":"like","time":"2020-05-27 14:32:48","flag":"1","pics3":"uploads\/9632692017-03-28-13-45-15-748.jpg"},{"username":"Mansi1","action":"like","time":"2020-05-27 16:21:19","flag":"1","pics3":"uploads\/9632692017-03-28-13-45-15-748.jpg"},{"username":"Mansi1","cmnt":"NICE","time":"2020-05-27 16:18:06","flag":"1","pics3":"uploads\/9632692017-03-28-13-45-15-748.jpg"},{"username":"Ramya01","cmnt":"NICE","time":"2020-05-27 16:23:07","flag":"1","pics3":"uploads\/9632692017-03-28-13-45-15-748.jpg"},{"username":"Lasya1","cmnt":"NICE","time":"2020-05-27 16:24:51","flag":"1","pics3":"uploads\/9632692017-03-28-13-45-15-748.jpg"}]';
echo $json."<br><br>";
$array = json_decode($json, true);
//print_r($array);

foreach($array as &$a){
   if($a['flag'] == 0){
       $a['flag'] = 1;
   }
}

echo json_encode($array);








 ?>

<!-- { "likes":[ {"username":"Mansi1","action":"like","time":"2020-05-23 17:13:28"}, {"username":"c","action":"like","time":"cjxhc"} ] } -->
<!-- {"likes":[{"username":"Mansi1","action":"like","time":"2020-05-23 17:13:28"}{"username":"c","action":"like","time":"cjxhc"}]} -->