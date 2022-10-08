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


$servername='localhost';  // hostname or ip of server
$mysql_login="a310"; // username and password to log onto db server
$mysql_password="a310";
$dbname='a310';  // name of database

////////////// Do not  edit below////////
function connecttodb($servername,$dbname,$mysql_login,$mysql_password)
{
        global $link;
        $link=mysql_connect ("$servername","$mysql_login","$mysql_password");
        if(!$link){die("Could not connect to MySQL");}
                mysql_select_db("$dbname",$link) or die ("could not open db".mysql_error());
}

connecttodb($servername,$dbname,$mysql_login,$mysql_password);

session_start();



//echo "WELCOME".$_SESSION['username'];
//$con=mysql_connect("localhost","a310","a310");
//$c=mysql_select_db("a310");

$username=$_REQUEST['username'];
$pass=$_REQUEST['password'];



$res=mysql_query("select username, password from admin where username='$username' and password='$pass'");
$rows=mysql_num_rows($res);

if($rows>0)
{
        ?>
        <script>
                document.location="admin_home.html";
        </script>
        <?php
        $_SESSION['username']=$user=$_REQUEST['username'];
        $password=$_REQUEST['password'];
        mysql_query("UPDATE users SET status=1 WHERE user_id='$user'");
}
else
{
        ?>
        <script>
                alert("invalid username or password. Please enter again");
                document.location="admin_index.html";
        </script>
        <?php
}
mysql_close($con);
?>

