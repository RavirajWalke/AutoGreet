<html>
    <head>
        <title>AutoGreet|Search</title>
    </head>
    <?php
    include 'connection.php';
    echo '<form method="post" action="signup.php" onsubmit="return validate();">
            <table align="center">
                <tr>
                    <td>
                        <label>Name:</label>
                    </td>
                    <td>
                        <input id="uname" name="name" type="text" autofocus="autofocus"required>
                        <label style="color:red;"><sup>*</sup></label>
                    </td>
                </tr>
                 <tr>
                    <td>
                        <label>Call/Nick Name:</label>
                    </td>
                    <td>
                        <input id="nname" name="nickname" type="text" required>
                        <label style="color:red;"><sup>*</sup></label>
                    </td>
                </tr>
            </table>';
    $result=  mysql_query("select * from Contacts");
    ?>
    <body bgcolor="f2e6ff">
        
    </body>
</html>