<html>
<head>
<frameset rows="70%,*">
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
$user=$_REQUEST['cht_user'];
session_start();
$_SESSION['receiver_id']=$user;
?>
<frame src="online_chtbox_frame1.php" noresize>
<frame src="online_chtbox_frame2.php" noresize>
<title><?php echo $user ?></title>
</head>
<body>
</body>
</html>
