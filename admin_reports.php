<html>
<head>
</head>
<body>

<br>

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
if(isset($_POST['submit'])) //checking if the form is submitted or not. 
{ 

	$box=$_REQUEST['box'];
    echo "You have successfully deleted the selected reports!!! <br>";
    foreach($box as $key=>$value)
		$result=mysql_query("DELETE from reports where rid='$value' "); 
}
?>
<form method="post" action="admin_reports.php" target="c">
<font color="#ffffff">
<table align=left height=70 width=700 style='border-collapse: collapse' >
<tr>
        <td bgcolor="#6e6f7b"  width="20"></td>
	<td bgcolor="#6e6f7b"  width="20">From</td>
        <td bgcolor="#6e6f7b" width="120">Reported on</td>
	<td bgcolor="#6e6f7b" width="120">Subject</td>
        
</tr>
</font>
<?php

//$user=$_COOKIE["session_id"];
session_start();
$user=$_SESSION['username'];
$res=mysql_query("select * from reports"); //changed by me

echo "<p><P>";
$num=mysql_num_rows($res);
$check="checkbox";
$color1="#ffffff";
$color2="#eeeeee";
$nowrap="nowrap";

for($i=0;$i<$num;$i++)
{
        $row=mysql_fetch_array($res);
	   if($i%2){
          echo "<tr>
                  <td bgcolor=$color1 nowrap=$nowrap width=10><input type=$check name=box[] value=$row[3]></td> 
                  <td bgcolor=$color1 nowrap=$nowrap width=20>$row[2]</td>
		  <td bgcolor=$color1 nowrap=$nowrap width=20>$row[0]</td> 
                  <td bgcolor=$color1 nowrap=$nowrap width=120><a href=report_content.php?rid=$row[3]>$row[4]</a></td>
		</tr>";
        }else{
                 echo "<tr>
                        <td bgcolor=$color2 nowrap=$nowrap width=10><input type=$check name=box[] value=$row[3] ></td> 
			<td bgcolor=$color2 nowrap=$nowrap width=20>$row[2]</td>
                        <td bgcolor=$color2 nowrap=$nowrap width=20>$row[0]</td> 
                        <td bgcolor=$color2 nowrap=$nowrap width=120><a href=report_content.php?rid=$row[3]>$row[4]</a></td> 
                       </tr>";

        }

}

?>

</table>
<DIV STYLE="POSITION:ABSOLUTE; LEFT:30; TOP:300">
<input type="submit"  name="submit" value="delete">
</div>
</form>

</body>
</html>

