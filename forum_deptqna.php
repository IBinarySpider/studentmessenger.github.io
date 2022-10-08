<html>
<head>
</head>

<body>
<h2>Student Messenger forum</h2>

<h4><a href=forum_home.html>forum home</a></h4>
<h4><a href=forum_newpost.php?dept=<?php echo $_REQUEST["dept"];?> >NEW QUESTION ? click me</a></h4>
<table border="0" cellpadding=1 cellspacing="0" width="100%">

	   <tr>
    		<td colspan="2" bgcolor="#6e6f7b"><font color="#ffffff">&nbsp;Threads</font></td>
    		<td bgcolor="#6e6f7b" nowrap="nowrap" width="120"><font color="#ffffff">Author&nbsp;</font></td>
   		<td bgcolor="#6e6f7b" nowrap="nowrap" width="80"><font color="#ffffff">Replies&nbsp;</font></td>
  		<td bgcolor="#6e6f7b" nowrap="nowrap" width="120"><font color="#ffffff">Last Post</font></td>
	   </tr>
	   
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
//to show questions in a department = fid////
$fid=$_REQUEST["dept"];
echo "$fid is the department no";
$res=mysql_query("select user_id,post_title,post_time,type,post_id from topic_post where fid='$fid' and type='q'
ORDER BY  post_time DESC");
$num=mysql_num_rows($res);
$color1="#ffffff";
$color2="#eeeeee";
$dept=$_REQUEST["dept"];
function replies ($msg_title)
{
	$r=mysql_query("select count(post_title) from topic_post where post_title='$msg_title'");
	$r=mysql_fetch_array($r);
	return $r[0];
}

for($i=0;$i<$num;$i++)
{
       $row=mysql_fetch_array($res);
	   $nor=replies($row[1]);
	   if($i%2)
	   {   
	   	echo "<tr>
		<td bgcolor=$color1>&nbsp;</td>
		<td bgcolor=$color1><a href=./forum_viewpost.php?post_id=$row[4]&dept=$dept>$row[1]</a>&nbsp;</td>
 		<td bgcolor=$color1  width=120>$row[0]&nbsp;</td>
 		<td bgcolor=$color1  width=80>&nbsp;$nor</td>
 		<td bgcolor=$color1  width=120>$row[2]&nbsp;</td>
	   </tr>";

	  }else{
	  echo "<tr>
		 <td bgcolor=$color2>&nbsp;</td>
		 <td bgcolor=$color2><a href=./forum_viewpost.php?post_id=$row[4]&dept=$dept>$row[1]</a>&nbsp;</font></td>
 		 <td bgcolor=$color2 width=120>$row[0]&nbsp;</td>
 		 <td bgcolor=$color2  width=80>&nbsp;$nor</td>
 		 <td bgcolor=$color2  width=120>$row[2]&nbsp;</td>
	  </tr>";
	  }
}
	
?>
</table>

</body>
</html>
