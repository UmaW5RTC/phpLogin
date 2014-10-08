<html>

<head>
    <title>php login</title>
    <style>
    #main{
            border: solid;
            width: 265px;
            margin-left: 537px;
            margin-top: 183px;

        }
    </style>
    </head>
    
    <body>
    <div id="main">
        <form method="post" name="frm" action="login.php">
        <table>
            <tr>
            <td colspan="2" align="center">LOGIN</td>
            </tr>
            <tr>
            <td>UserName</td>
                <td><input type="text" name="user" /></td>
            </tr>
            <tr>
                <td>PassWord</td>
                <td><input type="password" name="pass" /></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="LOGIN" /> </td>
            </tr>
        </table>
            </form>
        </div>
    </body>
</html>