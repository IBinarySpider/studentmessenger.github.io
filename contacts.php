<html>
<head>
</head>
<body>
<h1>Your friends list:</h1>
<div style="position:absolute; top=33"><hr color="blue"></div>
<table  width=600 height=10 style='border-collapse: collapse'>
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
$user=$_SESSION['username'];
if(isset($_POST['Add'])) //checking if the form is submitted or not. 
{ 

	$contactt=$_POST["contact"];
	$res=mysql_query("select user_id from users where user_id='$contactt'");
	$num=mysql_num_rows($res);
	if($num>0)	
	{
		echo "You have successfully added your friends!!! <br>";
		$result=mysql_query("INSERT INTO contacts VALUES('$user','$contactt') "); 
	}
	else
	{
		?>
		<script>
		alert("user_id doesnot exist..");
		document.location="contacts.php";
		</script>
		<?php
	}

}
if(isset($_POST['delete'])) //checking if the form is submitted or not. 
{ 

	$box=$_REQUEST['box'];
    echo "You have successfully deleted the selected mails!!! <br>";
	//echo" your inbox has " 
    foreach($box as $key=>$value) echo "<br>";
	$result=mysql_query("DELETE from contacts where contact_id='$value' "); 
}


function getfname($user_id)
{
	$restult=mysql_query("select fname from users where user_id='$user_id'"); //changed by me
	$row1=mysql_fetch_array($restult);
	return $row1[0];
}
function getlname($user_id)
{
	$restult=mysql_query("select lname from users where user_id='$user_id'"); //changed by me
	$row1=mysql_fetch_array($restult);
	return $row1[0];
}


$res=mysql_query("select * from contacts where user_id='$user'"); //changed by me

echo "<p><P>";
$num=mysql_num_rows($res);
$color1="#6e6eeg";
$color2="#eeeeee";
$nowrap="nowrap";
echo "<tr ><td bgcolor=$color1></td><td  bgcolor=$color1>First Name</td><td bgcolor=$color1>Last Name</td><td  bgcolor=$color1>User id</td></tr>";
?>
<form method="post"  action="contacts.php" target="c"> 
<?php ;//it is here for collecting check box values
for($i=0;$i<$num;$i++)
{
        $row=mysql_fetch_array($res);
		$fname=getfname($row[1]);
		$lname=getlname($row[1]);
	    echo "<tr>
				<td width=10><input type=\"checkbox\"  name=box[] value=$row[1]></td> 
		<td>$fname</td><td>$lname</td><td>$row[1]</td>";/*<td><form method=\"post\" 	action=\"compose_mail.html\" target=\"c\"><input type=\"submit\" value=\"send mail\"></form></td></tr> ";*/
}
?>
<tr><td><input type="submit" name="delete" value=" Delete "></td></tr>
</form>
</table> 

<font size=5>
<br>To add a new contact
enter user name of your friend<br></font>
<form method="post"  action="contacts.php" target="c"> 

<br>User Name: <input type="text" name="contact"> 
<input type="submit" name="Add" value=" Add ">
</form>
<img src="img/cartoon_friends.gif">
</body>
</html>
