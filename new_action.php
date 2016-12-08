<html>
    <head>
        <title>AutoGreet|Search</title>
    </head>
    <?php
    if (isset($_POST["submit"])) {
    include "connection.php";
    /*$result = mysql_query("insert into Contacts(FullName,UserName,EmailId,PhoneNo,Greeting)"
            . " values('" . $_POST["name"] ."','". $_POST["username"] . "','". $_POST["emaiId"]. "','". $_POST["phoneno"] . "','" . $_POST["greet"]. "');");*/
    $result = mysql_query("insert into Contacts(FullName,UserName,EmailId,PhoneNo,DOB,Greeting)"
            . " values('Raviraj Yogiraj Walke','Raviraj','walkeraviraj@sggs.ac.in','+919404330126','21-sep-1996','Greeting');");
    if (!$result)
        die("User already exists".  mysql_error());
    }
    else {
        if (!result) {
            die("Unable to create Data space");
        } 
        else {
            header("Location: search.php");
        }
         mysql_close();
    }
    ?>
    <body bgcolor="f2e6ff">
        
    </body>
</html>