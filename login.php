<?php
session_start();
$formuid=$_POST["userid"];
$formpass=$_POST["password"];
include 'connection.php';
$result=mysql_query("select * from users where UserName='".$formuid."';");
if(mysql_numrows($result)==0)
	die("User does not exists");
$pass = mysql_result($result,0,"Password");
if($formpass===$pass)
{
	$_SESSION["uid"]=$formuid;
	$_SESSION["uname"]=mysql_result($result,0,"UserName");
	$_SESSION["pass"]=$pass;
	header("Location: main.php");
}
else
{
    echo '<script language="javascript">';
    echo 'alert("username and password does not match")';
    echo '</script>';
}
mysql_close();
?>