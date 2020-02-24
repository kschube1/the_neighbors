<?php
function dbConnect()
{
    $dbhost = "avl.cs.unca.edu";
    $dbuser = "kschube1";
    $dbpass = "sql4you";
    $conn = new mysqli($dbhost, $dbuser, $dbpass) or die("Connect failed: %s\n". $conn -> error);
    
    return $conn;
}

function closeCon($conn)
{
    $conn -> close();
}

?>