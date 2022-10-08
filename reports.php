<?php
session_start();
$reporter=$_SESSION['username'];
$user=$_POST['user'];
$subject=$_POST['subject'];
$reason=$_POST['reason'];
$con=mysql_connect("localhost", "a310", "a310");
$c=mysql_select_db("a310");
$res=mysql_query("select user_id from users where user_id='$user'");
$num=mysql_num_rows($res);
if(empty($user) or empty($subject) or empty($reason))
{
	?>
        <script>
        alert("Enter all fields");
        document.location="reports.html";
        </script>
        <?php
}
else
{
	if($num>0)
	{
		mysql_query("insert into reports values('$user','$reason','$reporter','','$subject')");
		?>
		<script>
		alert("Successfully reported..");
		document.location="reports.html";
		</script>
		<?php
	}
	else
	{
		?>
		<script>
		alert("user id doesnot exist");
		document.location="reports.html";
		</script>
		<?php
	}
}
?>
