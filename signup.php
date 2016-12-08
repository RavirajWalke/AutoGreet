<?php

session_start();
if (isset($_POST["submit"])) {
    include "connection.php";
    $result = mysql_query("insert into users(FullName,UserName,EmailId,PhoneNo,Password,JoinDate)"
            . " values('" . $_POST["name"] ."','". $_POST["username"] . "','". $_POST["emaiId"]. "','". $_POST["phoneno"] . "','" . $_POST["password"]. "','" .date("Y-m-d"). "');");
    if (!$result)
        die("UserID already exists".  mysql_error());
    else {
        if (!result) {
            die("Unable to create Data space");
        } else {
            $_SESSION["uid"] = $_POST["userid"];
            $_SESSION["uname"] = $_POST["username"];
            $_SESSION["pass"] = $_POST["password"];
            header("Location: main.php");
        }
    }
    mysql_close();
}
?>