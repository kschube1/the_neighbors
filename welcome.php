<?php
if(isset($_COOKIE['agent_id']))
{ 
$agent_id = $_COOKIE['agent_id'];
    

} else {
    $email = $_POST['email'];

$servername = "avl.cs.unca.edu";
$username = "kschube1";
$password = "sql4you";
$dbname = "kschube1DB";
$link = mysqli_connect($servername, $username, $password, $dbname) or die("Connect failed: %s\n". $conn -> error);
  
//$query = "INSERT INTO user VALUES($email)";
$query = "INSERT INTO user VALUES(DEFAULT,'$email')";    

    
mysqli_query($link, $query);
$agent_id = mysqli_insert_id($link);

/* close connection */
mysqli_close($link);
    setcookie("agent_id", $agent_id, time() + (86400 * 90), "/"); // 86400 = 90 day //maybe
}


?>




<html>

    <head>
        
<script type="text/javascript" >
   function preventBack(){window.history.forward();}
   
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
  
    
        </script>
    </head>
    <style>

        body {
            background-color: black;
        }

h1 {
    font-family: monospace;
    font-size: 30px;
    
}
        h2 {
            font-family: monospace;
            
        }
.box3 {
  background-repeat: no-repeat;
  background-size: contain;
  position: absolute;
  
}

#pin-3 {
  top:10%;
  left:25%;
}

.box4 {
  background-repeat: no-repeat;
  background-size: contain;
  position: absolute;

}

#pin-4 {
  top:17%;
  left:20%;
}

/*BUTTON */ 
      
.badge {
  width:40%;
  height:40%;
  background-image: url(badge.png);
  background-position: bottom center;
  background-repeat: no-repeat;
  background-size: contain;
  position: absolute;
}


#badge-id {
  top:53%;
  left:46%;
}

.badge:hover {
  -ms-transform: scale(1.1); /* IE 9 */
  -webkit-transform: scale(1.1); /* Safari 3-8 */
  transform: scale(1.1); 
}


</style>
    <!-- AUDIO-->
<script type="text/javascript" src="howler.min.js"></script>
<script type="text/javascript">
var sound = new Howl({
	loop: true,
    src: ['audio/intro.ogg', 'audio/intro.mp3']
     }).play();
</script>

<body>
<?php echo $agent_id; ?>    
    
    <!-- BACKGROUND-->
 

    <img src=welcome.png width=100% height=100%>
     <!-- BACK-->
  
    
   <a href="policestation.html">
  <div id="badge-id" class="badge">
      
    </div>
        </a>
    



</body>


    
</html>
    
