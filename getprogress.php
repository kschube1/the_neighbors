<?php
//echo json_encode("$$$$");
if(isset($_COOKIE['agent_id']))
{ 
    $id= $_COOKIE['agent_id'];
    
    echo "7777777";
} else {
    header("Location: /arden.cs.unca.edu/~kschube1/nonlinear/login.html");
   exit;
}

$servername = "avl.cs.unca.edu";
$username = "kschube1";
$password = "sql4you";
$dbname = "kschube1DB";
$link = mysqli_connect($servername, $username, $password, $dbname) or die("Connect failed: %s\n". $conn -> error);
  
$query = "SELECT $event_id FROM progress WHERE id = $id";
if ($return) {
    while($row = mysqli_fetch_row_assoc($return)) {
       if ($row['event_id'] == 1) {
           //searching for particular progress
        //do something - can do multiple
       } 
        break;
    }
    
}
    
mysqli_close($link);

?>