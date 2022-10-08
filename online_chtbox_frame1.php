<html>
<head>
<meta http-equiv="refresh" content="1">
</head>
<body>
<?php
/**
 *
 * Student Messenger 1.0 - Web based student interaction system
 * Copyrights 2010 Sir CRR edu society, All Rights Reserved.
 *
 * Sir CRR edu society license
 * License: http://sircrrengg.ac.in/license
 *
 * 2010 Sumanth & Dinesh 
 * sumanth.027@gmail.com, dinesh6777@gmail.com
 */
session_start();

$con=mysql_connect("localhost","a310","a310");
$c=mysql_select_db("a310");
$sender_id=$_SESSION['username'];
$receiver_id=$_SESSION['receiver_id'];

$res=mysql_query("select *from chat where (receiver_id='$sender_id' or receiver_id='$receiver_id') and (sender_id='$sender_id' or sender_id='$receiver_id') order by msgtime");

$num=mysql_num_rows($res);

for($i=0;$i<$num;$i++)
{
	$row=mysql_fetch_array($res);
	if($row[0]==$sender_id)
		$color="green";
	else
		$color="red";
	echo "<font color='$color'>$row[0]</font> : $row[2]<br>";
}

?>



</body>
</html>
