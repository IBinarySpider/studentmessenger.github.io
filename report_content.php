<html>
<head>
</head>
<body>
<br>
<br>
<font color="#ffffff">
<table align=left height=70 width=700 style='border-collapse: collapse' >   
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
$num=$_REQUEST["rid"];


$res=mysql_query("select * from reports where rid='$num'"); //changed by me
//print_r($res);
echo "<p><P>";
$num=mysql_num_rows($res);
$check="checkbox";
$color1="#bbbbbb";
$color2="#eeeeee";
$nowrap="nowrap";


$row=mysql_fetch_array($res);

				  echo "<tr><td bgcolor=$color1 >From: $row[2]</td></tr>
						<tr><td bgcolor=$color1 >Reported on : $row[0]</td></tr>
						<tr><td bgcolor=$color1 >Subject : $row[4]</td></tr>
						<tr><td bgcolor=$color1 >Content: </td></tr>
                      	<tr rowspan=10 colspan=6 ><td bgcolor=$color2> $row[1]</td></tr> ";					           
$user=$row[0];

?>
</table>

 
</body>
</html>

