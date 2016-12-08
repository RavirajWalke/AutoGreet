<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>AutoGreet | Sign Up</title>
    </head>
    <?php
    session_start();
    $uname = $_SESSION["uname"];
    $uid = $_SESSION["uid"];
    $pass = $_SESSION["pass"];
    $notes = $uid . "_notes";
    include "connection.php";
    ?>
    <frameset rows="14%,*" scrolling="no" border="0">
        <frame src="header.php">
    <frameset cols="20%,*,20%" scrolling="no" border="0">
        <frame src="images1.html" name="left">
        <frame src="info.php" name="main" >
        <frame src="images2.php"></frame>
    </frameset>
</frameset>
