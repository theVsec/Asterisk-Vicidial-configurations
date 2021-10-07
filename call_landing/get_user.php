<?php
// Get the phone variable

$phone=$_GET['phone'];

// Connection data

$serveri='x.x.x.x';
$mysql_user='user';
$mysql_pass='password';
$mysql_db='database';


// Find the last user who called this number
$link = $mysql = mysql_connect($serveri, $mysql_user, $mysql_pass, $mysql_db) or die(mysql_error());
mysql_select_db($mysql_db, $mysql);
$result = mysql_query("select last_local_call_time,user from vicidial_list where phone_number = $phone and last_local_call_time not NULL order by last_local_call_time desc limit 0,1;");

$row1 = mysql_fetch_array ( $result );
echo $row1['user'];
?>
