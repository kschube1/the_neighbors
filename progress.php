<?php
//echo json_encode("$$$$");
if(isset($_COOKIE['agent_id']))
{ 
    $id= $_COOKIE['agent_id'];
    $event_id = $_POST['event_id'];
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
  
$query = "INSERT INTO progress (id, event_id) VALUES($id, $event_id)";
$return = mysqli_query($link, $query);
echo "99999".mysqli_error($link).$query;
/* close connection */
mysqli_close($link);

$link = mysqli_connect($servername, $username, $password, $dbname) or die("Connect failed: %s\n". $conn -> error);

$query = "INSERT INTO log VALUES($id, now(), $event_id)";
    
mysqli_query($link, $query);
echo "####".mysqli_error($link);

/* close connection */
mysqli_close($link);

?>