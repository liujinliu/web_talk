<html>
<head>
    <title>TALK</title>
</head>
<body>
<?php
$nick=$_COOKIE["nick"];
$words=$_POST['words'];
if($words) {
    $link_ID=mysql_connect("localhost","root","kangkang") or die('connect error:'.mysql_error());
    if(mysql_select_db("my_chat",$link_ID))
        echo "";
    else
        echo ('select database error:'.mysql_error());
    $time=date(y).date(m).date(d).date(h).date(i).date(s);
    $str="INSERT INTO chat(chtime,nick,words) values('$time','$nick','$words');";
    //$str="insert into chat(chtime,nick,words) values('2014-11-27 23:44:33','gary','my second try')";
    mysql_query($str,$link_ID); 
    mysql_close($link_ID);
}
?>
<form action="speak.php" method="post" target="_self">
    <input type="text" name="words" cols="20">
    <input type="submit" value="speak out">
</form>
</body>
</html> 
