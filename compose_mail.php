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
$toaddr=$_POST['to_address'];
$fromaddr=$_SESSION['username'];
$sub=$_POST['subject'];
$tex=$_POST['msg_body'];


$t=mysql_query("select user_id from users where user_id ='$toaddr'");
$f=mysql_query("select user_id from users where user_id ='$fromaddr'");
$tr=mysql_num_rows($t);
$tf=mysql_num_rows($f);
if($tr==0)
{
	?>
	<script>
	alert("to address does not exist..");
	document.location="compose_mail.html";
	</script>
	<?php
}
else if($tf==0)
{
	?>
	<script>
	alert("from address does not exist..");	
	document.location="compose_mail.html";
	</script>
	<?php
}
else
{
	$suc=mysql_query("insert into messages (receiver_id,sender_id,msg_sub,msg_body) values('$toaddr','$fromaddr','$sub','$tex')");
	
	
	if($suc)	
	{	
		ECHO "<script>";              //here we are sending toaddress to another document 
		ECHO "document.location=\"compose_mail_success.php?toaddr= $toaddr\"";
		ECHO "</script>";
	?>
		<?php
	}
	else
	{
		?>
		<script>
		alert("mail cannot be send");
		</script>
		<?php
	}
}
mysql_close($con);
?>

