<!DOCTYPE html>
<?php
$host="localhost";
$user="root";
$pass="";
$db = "AutoGreet";
$con = mysql_connect("localhost","root","");
$db = mysql_select_db($db);

if(!$con){
die("Connection Error".mysql_error());
}
?>