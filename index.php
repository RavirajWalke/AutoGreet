<!DOCTYPE html>
<html>
    <head>
        <title>AutoGreet | Welcome</title>
        <style>
            #header h1 { margin-top: 0; }
            body { margin: 0px; padding: 0px;}
        </style>
    </head>
    <body bgcolor=" #f2e6ff">
        <?php include 'CreateDB.php';?>
        <div style="background-color: #b3b3ff">
        <h1 align="center"style="color: chartreuse" >AutoGreet</h1>
        </div>
        <form action="login.php" method="post" >
            <table align="center">
                <tr>
                    <td>
                        <label>UserID:</label>
                    </td>
                    <td>
                        <input id="uid" name="userid" type="text" autofocus="autofocus" required>
                        <label style="color:red;"><sup>*</sup></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Password:</label>
                    </td>
                    <td>
                        <input id="pass" name="password" type="password" required>
                        <label style="color:red;"><sup>*</sup></label>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="Log In" />	
                    </td>
                </tr>
            </table>
        </form>
        <form action="signup.html">
            <table align="center">
                <tr>
                    <td>
                        <label>Don't have an account?</label>
                    </td>
                    <td>
                        <input type="submit" value="Sign Up">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>