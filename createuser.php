
<?php

$email = $_POST['email'];

$servername = "avl.cs.unca.edu";
$username = "kschube1";
$password = "sql4you";
$dbname = "kschube1DB";
$link = mysqli_connect($servername, $username, $password, $dbname) or die("Connect failed: %s\n". $conn -> error);
  
$query = "INSERT INTO user VALUES(DEFAULT, $email)";
    
mysqli_query($link, $query);
$agent_id = mysqli_insert_id($link);

/* close connection */
mysqli_close($link);
?>
