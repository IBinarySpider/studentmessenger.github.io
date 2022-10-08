<html>
<head>
</head>
<body>
<h1>Your Online  friends:</h1>
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

echo "<p><p>";
$num=mysql_num_rows($res);
$color1="#6e6eeg";
$color2="#eeeeee";
$nowrap="nowrap";
echo "<table width=600 height=10 style='border-collapse: collapse'>";
echo "<tr><td  bgcolor=$color1>First Name</td><td bgcolor=$color1>Last Name</td><td  bgcolor=$color1>User id</td></tr>";

//it is here for collecting check box values
for($i=0;$i<$num;$i++)
{
	
	    $row=mysql_fetch_array($res);
		$fname=getfname($row[1]);
		$lname=getlname($row[1]);
		$checkStatus=mysql_query("select status from users where status=1 and user_id='$row[1]'");
	    $row1=mysql_fetch_array($checkStatus);
		if($row1)
		echo "<tr>	<td>$fname</td>
			<td>$lname</td>
			<td><a href=online_chtbox.php?cht_user=$row[1] target=\"_blank\">$row[1]</a></td> </tr>";
}
?>
</table> 

<font size=5>
<br>
<img src="img/Big_Smil1.gif">

</body>
</html>
