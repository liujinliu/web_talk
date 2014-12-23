<?php
    $nick=$_POST['nick'];
    setcookie("nick",$nick);
?>
<html>
<title>MY CHAT</title>
<frameset rows="80%,*">
<frame src="cdisplay.php" name="chatdisplay">
<frame src="speak.php" name="speak">
</frameset>
</html> 
