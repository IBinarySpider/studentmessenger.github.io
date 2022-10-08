
<html>
<head>
</head>
<body>
<form method="post" action="online_chtbox_frame2.php">
<textarea rows=6 cols=50 name="msg"></textarea>
<input type="submit" value="Post Scrap">
</form>



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

if(isset($_REQUEST["msg"]))
{
	session_start();
	$con=mysql_connect("localhost","a310","a310");
	$c=mysql_select_db("a310");
	$sender_id=$_SESSION['username'];
	$receiver_id=$_SESSION['receiver_id'];
	$msg=$_POST['msg'];

	$res=mysql_query("insert into chat (sender_id,receiver_id,msg) values('$sender_id','$receiver_id','$msg')");
}
?>


</body>
</html>
