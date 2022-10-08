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

$con=mysql_connect("localhost", "a310", "a310");
$c=mysql_select_db("a310");

$user=$_POST['user'];
$res=mysql_query("select user_id from users where user_id='$user'");
$num=mysql_num_rows($res);
if($num>0)	
{
	mysql_query("delete from users where user_id='$user'");
	?>
	<script>
	alert("You have successfully deleted the user");
	document.location="admin_ban_users.html";
	</script>
	<?php
}
else
{
	?>
	<script>
	alert("user_id doesnot exist..");
	document.location="admin_ban_users.html";
	</script>
	<?php
}
?>

