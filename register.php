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
$con=mysql_connect("localhost","a310","a310");
mysql_select_db("a310");
$userid=$_POST['user_id'];
$password=$_POST['password'];
$con_password=$_POST['con_password'];
$fnam=$_POST['first_name'];
$lnam=$_POST['last_name'];
$coun=$_POST['country'];
$zip=$_POST['zipcode'];
$s_bran=$_POST['branch'];
$addr=$_POST['address'];
$state=$_POST['state'];
$sex=$_POST['sex'];
$year=$_POST['year'];
$month=$_POST['month'];
$day=$_POST['day'];
$dob=$year.'-'.$month.'-'.$day;
echo $sex;
print("\n$sex $dob");
if (strcmp($password,$con_password))
{
	?>
	<script>
	alert("Passwords does not match. Please try again. ");
	document.location="register.html";
	</script>
	<?php
}

if(empty($userid) or empty($password) or empty($fnam) or empty($lnam) or empty($zip) or empty($s_bran))
{
	 ?>
        <script>
        alert("Please enter all fields ");
        document.location="register.html";
        </script>
        <?php
}


$r=mysql_query("insert into users (user_id,password,fname,lname,zipcode,s_branch,address,country,state,sex,dob) values('$userid','$password','$fnam','$lnam',$zip,'$s_bran','$addr','$coun','$state','$sex','$dob')");
if($r)
{
	?>
	<script>
	alert("successfully registered");
	document.location="register_success.html";
	</script>
	<?php
}
else
{
	?>
	<script>
	alert("User id already exists. Please try another one.");
	document.location="register.html";
	</script>
	<?php
}

mysql_close($con);
?>

