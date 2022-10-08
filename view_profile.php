<html>
<body>
<br>
<font size=5 color="green">Your profile</font>
<font color="#ffffff">
<table align=left height=70 width=700 style='border-collapse: collapse' >
<tr>
        <td bgcolor="#6e6f7b"  width="120">User_id</td>
        <td bgcolor="#6e6f7b"  width="120">First name</td>
        <td bgcolor="#6e6f7b"  width="120">Last name</td>
		<td bgcolor="#6e6f7b"  width="120">Address</td>
		<td bgcolor="#6e6f7b"  width="120">State</td>
		<td bgcolor="#6e6f7b"  width="120">Country</td>
		<td bgcolor="#6e6f7b"  width="120">Zipcode</td>
		<td bgcolor="#6e6f7b"  width="120">Branch</td>
		<td bgcolor="#6e6f7b"  width="120">Sex</td>
		<td bgcolor="#6e6f7b"  width="120">DOB</td>
		</tr>
</font>

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
echo $user;
$res=mysql_query("select * from users where user_id='$user'");
$row=mysql_fetch_array($res);


$check="checkbox";
$color1="#ffffff";
$color2="#eeeeee";
$nowrap="nowrap";

         echo "<tr>
                  <td bgcolor=$color1 nowrap=$nowrap width=120>$row[0]</td> 
                  <td bgcolor=$color1 nowrap=$nowrap width=120>$row[2]</td> 
				  <td bgcolor=$color1 nowrap=$nowrap width=120>$row[3]</td> 
				  <td bgcolor=$color1 nowrap=$nowrap width=120>$row[4]</td>
				  <td bgcolor=$color1 nowrap=$nowrap width=120>$row[5]</td> 
 				  <td bgcolor=$color1 nowrap=$nowrap width=120>$row[6]</td>
  				  <td bgcolor=$color1 nowrap=$nowrap width=120>$row[7]</td>
				  <td bgcolor=$color1 nowrap=$nowrap width=120>$row[8]</td> 
				  <td bgcolor=$color1 nowrap=$nowrap width=120>$row[9]</td> 
				  <td bgcolor=$color1 nowrap=$nowrap width=120>$row[10]</td> 
				  				  
				  </tr> ";

?>
</table>
<font size=5><div STYLE="POSITION:ABSOLUTE; LEFT:15; TOP:200">
<a href="edit_profile.html">edit my profile</a><br><a href="home.html">back</a></div></font>


</body>
</html>
