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
$c=mysql_select_db("a310");
if($c)
$username=$_POST['username'];
$zipcode=$_POST['zipcode'];
$year=$_POST['yy'];
$month=$_POST['mm'];
$day=$_POST['dd'];
$dob=$year.'-'.$month.'-'.$day;
if(empty($username) or empty($zipcode) or empty($dob) )
{
         ?>
        <script>
        alert("Please enter all fields ");
        document.location="forgot_password.html";
        </script>
        <?php
}
else
{
$res=mysql_query("select password from users where user_id='$username' and zipcode='$zipcode'and dob='$dob'");
$rows=mysql_num_rows($res);
	if($rows>0)
	{
	$f=mysql_fetch_array($res);
	$color="green";
	 print "<center><h1>your password is :<font color='$color'>  $f[0]</font> </h1></center>" ; 
        }
        else
        {
                ?>
                <script>
                alert("invalid enterys");
                document.location="forgot_password.html";
                </script>
                <?php
        }
}
mysql_close($con);
?>

