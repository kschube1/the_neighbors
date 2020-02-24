<html>
    <head>
        
<script type="text/javascript" >
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script>
    </head>

    <style>
       
       
.map {
  margin:10px;
  border:5px solid red;
  position: relative;
  display: inline-block;

}

.map img {
  max-width:100%;
  display: block;
}

.box {
  width:15%;
  height:15%;
  background-image:   url(startpapersfar.png);
  background-position: bottom center;
  background-repeat: no-repeat;
  background-size: contain;
  position: absolute;
}

#pin-1 {
  top:14%;
  left:33%;
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
 <?php echo date('l, F jS, Y'); ?>
 <?php
include 'connect.php';
$conn = dbConnect();
closeCon($conn);
?>
  <img src=startsmallpapers.png width=100% height=100%>
    
    <a href="intro.html">
  <div id="pin-1" class="box">
      
    </div>
        </a>


    
    
</html>
    
