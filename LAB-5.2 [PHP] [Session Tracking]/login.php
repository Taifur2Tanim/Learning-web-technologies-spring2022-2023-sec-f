<html>
<head>
    <title>Login</title>
    <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
</head>
<body>
    <table style="width:1000px"  >
        <tr height="100px">
           <td><a href="publicHome.php"><img src="logo.jpg" alt="logo"></a>
           &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                <a href="publicHome.php">Home</a> |
                <a href="login.php">Login</a> |
                <a href="registration.php">Registration</a> 
            </td>
                
             
        
        </tr>

        <tr height="200px">
            <td width=20%></td>
            <td>
                <form method="post" action="loginCheck.php">
                    <fieldset>
                        <legend>Login</legend>
                        <table align="center" >
                            
                            <tr height=40px>
                                <td>
                                    Username : 
                                </td>
                                <td>
                                    <input type="text" name="username" value="<?php echo isset($_SESSION['lusername']) ? $_SESSION['lusername'] : ''  ?>">
                                </td>
                            </tr>
                            <tr height=40px>
                                <td width=90px>
                                    Password : 
                                </td>
                                <td>
                                    <input type="password" name="password" value="">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="checkbox" name="rememberMe" value="1">
                                    Remember Me 
                                    <br><br>
                                </td>
                                
                            </tr>

                            <tr>
                                <td colspan="2">
                                <input type="submit" name="submit" value="Login"> 
                                <a href="forgotPassword.php"><i>Forgot Password?</i></a>           
                                </td>              
                            </tr>
                            <tr>
                                <td colspan="2">
                                <?php
                                    if(isset($_SESSION['upw']))
                                    {
                                        echo "username or password incorrect!<br>";
                                    }
                                    // print_r($_SESSION);

                                ?>
                                </td>              
                            </tr>
                        </table>
                    </fieldset>

                </form>

            </td>
            <td width=20%></td>
        </tr>

        <tr height="80px">
            <td colspan="3" align="center">
                <p>Copyright © 2017</p>
            </td>
        </tr>
    </table>
</body>
</html>