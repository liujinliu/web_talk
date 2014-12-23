<html>
<head>
　<title>display user chat</title>
　<meta http-equiv="refresh" content="5;url=cdisplay.php">
</head>
<body>
<?php
$link_ID=mysql_connect("localhost","root","kangkang") or die('connect error:'.mysql_error());
if(mysql_select_db("my_chat",$link_ID))
    echo "";
else
    echo ('select database error:'.mysql_error());
$str="select * from chat ORDER BY chtime;";
mysql_select_db("my_chat",$link_ID); 
$result=mysql_query($str,$link_ID);
$rows=mysql_num_rows($result);
@mysql_data_seek($result,$rows-15);
if ($rows<15)
    $l=$rows;
 else
    $l=15; 
for ($i=1;$i<=$l;$i++) {
    list($chtime,$nick,$words)=mysql_fetch_row($result);
    echo '</br>';
    echo $chtime; echo " ";echo $nick; echo":" ; echo $words;
}
@mysql_data_seek($result,$rows-20);
list($limtime)=mysql_fetch_row($result);
$str="DELETE FROM chat WHERE chtime<'$limtime';" ;
$result=mysql_query($str,$link_ID); 
mysql_close($link_ID);
?>
</body>
</html> 
