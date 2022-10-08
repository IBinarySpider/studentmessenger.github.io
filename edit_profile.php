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
session_start();
$field=$_POST['field'];
$field_value=$_POST['field_value'];
$user=$_SESSION['username'];
mysql_query("update users set $field='$field_value' where user_id='$user'");
?>

<script>
alert("updated successfully");
document.location="edit_profile.html";
</script>
