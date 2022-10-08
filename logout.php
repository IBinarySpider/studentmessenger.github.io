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
session_start();
$username=$_SESSION['username'];

mysql_query("UPDATE users SET status=0 WHERE user_id='$username'");


session_destroy(); //Destroys all data registered to a session
echo "YOU HAVE SUCCESSFULLY LOGGED OUT";
mysql_query("delete from chat where sender_id='$username'");
?><script>
	alert("LOGGED OUT SUCCESSFULLY");
	document.location="index.html";
  </script>



