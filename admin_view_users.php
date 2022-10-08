<html>
<body>
<br>
<font size=5 color="green">List of users...</font><br><br>
<font color="#ffffff">
<table align=left height=70 width=700 style='border-collapse: collapse' >
<tr>
        <td bgcolor="#6e6f7b"  width="120">User_id</td>
        <td bgcolor="#6e6f7b"  width="120">First name</td>
        <td bgcolor="#6e6f7b"  width="120">Last name</td>
		<td bgcolor="#6e6f7b"  width="120">State</td>
		<td bgcolor="#6e6f7b"  width="120">Branch</td>
		<td bgcolor="#6e6f7b"  width="120">Sex</td>
		<td bgcolor="#6e6f7b"  width="120">DOB</td>
		<td bgcolor="#6e6f7b"  width="120">Status</td>
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

$res=mysql_query("select * from users");
$num=mysql_num_rows($res);


$check="checkbox";
$color1="#ffffff";
$color2="#eeeeee";
$nowrap="nowrap";

for($i=0;$i<$num;$i++)
{
        $row=mysql_fetch_array($res);
	   if($i%2)
	   {
          echo "<tr>
                  <td bgcolor=$color1 nowrap=$nowrap width=120>$row[0]</td> 
                  <td bgcolor=$color1 nowrap=$nowrap width=120>$row[2]</td> 
				  <td bgcolor=$color1 nowrap=$nowrap width=120>$row[3]</td> 
				  <td bgcolor=$color1 nowrap=$nowrap width=120>$row[5]</td> 
				  <td bgcolor=$color1 nowrap=$nowrap width=120>$row[8]</td> 
				  <td bgcolor=$color1 nowrap=$nowrap width=120>$row[9]</td> 
				  <td bgcolor=$color1 nowrap=$nowrap width=120>$row[10]</td> 
				  <td bgcolor=$color1 nowrap=$nowrap width=120>$row[11]</td> 
				  </tr> ";
        }
		else
		{
                 echo "<tr>
                     <td bgcolor=$color2 nowrap=$nowrap width=120>$row[0]</td> 
				     <td bgcolor=$color2 nowrap=$nowrap width=120>$row[2]</td> 
					 <td bgcolor=$color2 nowrap=$nowrap width=120>$row[3]</td> 
					 <td bgcolor=$color2 nowrap=$nowrap width=120>$row[5]</td> 
					 <td bgcolor=$color2 nowrap=$nowrap width=120>$row[8]</td> 
					 <td bgcolor=$color2 nowrap=$nowrap width=120>$row[9]</td> 
					 <td bgcolor=$color2 nowrap=$nowrap width=120>$row[10]</td> 
					 <td bgcolor=$color2 nowrap=$nowrap width=120>$row[11]</td>  
				     </tr> ";

        }

}
?>
</table>
</body>
</html>
