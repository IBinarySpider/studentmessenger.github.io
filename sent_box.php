<html>
<head>
</head>
<body>
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
$con=mysql_connect("localhost", "a310", "a310");
$c=mysql_select_db("a310");
if(isset($_POST['submit'])) //checking if the form is submitted or not. 
{ 

	$box=$_REQUEST['box'];
    echo "You have successfully deleted the selected mails!!! <br>";
	//echo" your inbox has " 
    foreach($box as $key=>$value) 
		$result=mysql_query("DELETE from messages where msg_id='$value' "); 
}
?>
<br>
<br>
<br>
<form method="post" action="sent_box.php" target="c">
<font color="#ffffff">
<table align=left height=70 width=100% style='border-collapse: collapse'>
<tr>
        <td bgcolor="#6e6f7b"  width="10"></td>
        <td bgcolor="#6e6f7b"  width="20">To</td>
        <td bgcolor="#6e6f7b" width="120">Subject</td>
        <td bgcolor="#6e6f7b"  width="120">Date and Time</td>
</tr>
</font>
<?php
$user=$_SESSION['username'];
$res=mysql_query("select * from messages where sender_id='$user' order by msg_time desc"); //changed by me

echo "<p><P>";
$num=mysql_num_rows($res);
$color1="#ffffff";
$color2="#eeeeee";
$nowrap="nowrap";
$link="";
for($i=0;$i<$num;$i++)
{
        $row=mysql_fetch_array($res);
	   if($i%2){
                echo "<tr>
                        <td bgcolor=$color1 nowrap=$nowrap width=10><input type=\"checkbox\" name=box[] value=$row[0]></td> 
                        <td bgcolor=$color1 nowrap=$nowrap width=20>$row[1]</td> 
                        <td bgcolor=$color1 nowrap=$nowrap width=120><a href=mail_content.php?msg_id=$row[0]>$row[4]</a></td> 
                        <td bgcolor=$color1 nowrap=$nowrap width=120>$row[5]</td></tr> ";
        }else{
                 echo "<tr>
                        <td bgcolor=$color2 nowrap=$nowrap width=10><input type=\"checkbox\" name=box[] value=$row[0]></td> 
                        <td bgcolor=$color2 nowrap=$nowrap width=20>$row[1]</td> 
                        <td bgcolor=$color2 nowrap=$nowrap width=120><a href=mail_content.php?msg_id=$row[0]>$row[4]</a></td> 
                        <td bgcolor=$color2 nowrap=$nowrap width=120>$row[5]</td></tr> ";

        }

}
?>
</table>
<DIV STYLE="POSITION:ABSOLUTE; LEFT:30; TOP:300">
<input type="submit" name="submit" value="delete">
</div>

</form>
<div  STYLE="POSITION:ABSOLUTE; LEFT:30; TOP:400"><img src="img/u18270846.jpg"></div>
</body>
</html>

