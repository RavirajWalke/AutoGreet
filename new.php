<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>AutoGreet | New</title>
        <script type="text/javascript">
            function validate()
            {
                if (document.getElementById("uname").value == "")
                {
                    alert("Enter User Name!");
                    return false;
                }  
                else if (document.getElementById("eid").value == "")
                {
                    alert("EmailID must contain @!");
                    return false;
                } 
                else if(document.getElementById("pno").value.length<13)
                {
                    alert("Enter phone no with code e.g.:+91");
                    return false;
                }
                else if(document.getElementById("pno").value==0)
                {
                    alert("Enter phone no");
                    return false;
                }
                else if (document.getElementById("dob").value == 0)
                {
                    alert("Enter date");
                    return false;
                }
                else
                    return true;
            }
        </script>
    </head>
    <body bgcolor="#f2e6ff">
        <form method="post" action="new_action.php" onsubmit="return validate();">
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
                        <input id="nname" name="username" type="text" required>
                        <label style="color:red;"><sup>*</sup></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Email Id</label>
                    </td>
                    <td>
                        <input id="eid" name="emaiId" type="text" required>
                        <label style="color:red;"><sup>*</sup></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Phone No</label>
                    </td>
                    <td>
                        <input id="pno" name="phoneno" type="text" required>
                        <label style="color:red;"><sup>*</sup></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Date of Birth:</label>
                    </td>
                    <td>
                        <input type="date" id="dob" name="dob" required>
                        <label style="color:red;"><sup>*</sup></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Greeting:</label>
                    </td>
                    <td>
                        <textarea name="greet" cols="60" rows="8" placeholder="Add a greeting..." required></textarea>
                        <label style="color:red;"><sup>*</sup></label>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="Save" value="Add Contact" />
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>