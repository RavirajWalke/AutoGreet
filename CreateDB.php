<!DOCTYPE html>
<?php
$host="localhost";
$user="root";
$pass="";
$db = "AutoGreet";

$con = mysql_connect("localhost","root","");
mysql_query("create database if not exists ".$db)or die(mysql_error());

$db = mysql_select_db($db);

if(!$con){
die("Connection Error".mysql_error());
}

$result=mysql_query("CREATE TABLE IF NOT EXISTS Users(
        FullName varchar(50) NOT NULL DEFAULT '',
  	UserName varchar(20) NOT NULL DEFAULT '',
        EmailId varchar(50) NOT NULL,
        PhoneNo varchar(13) NOT NULL,
  	Password varchar(20) NOT NULL,
        JoinDate date NOT NULL,
 	PRIMARY KEY (EmailId,PhoneNo)
	);");
if(!$result)
    die("could not create users table".  mysql_error());
$result=mysql_query("CREATE TABLE IF NOT EXISTS Contacts(
        FullName varchar(50) NOT NULL DEFAULT '',
  	UserName varchar(20) NOT NULL DEFAULT '',
        EmailId varchar(50) NOT NULL,
        PhoneNo varchar(13) NOT NULL,
        DOB varchar(12) NOT NULL,
  	Greeting text NOT NULL,
 	PRIMARY KEY (EmailId,PhoneNo)
	);");
?>