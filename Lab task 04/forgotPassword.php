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
            
            <td>
                <form method="post" action="loginCheck.php">
                    <fieldset>
                        <legend>FORGOT Password</legend>
                        <table align="center" >
                            
                            <tr height=40px>
                                
                                    Enter Email : 
                                    <input type="text" name="username" value="<?php echo isset($_SESSION['lusername']) ? $_SESSION['lusername'] : ''  ?>">
                            
                            </tr>
                            <br>
                          
                            <hr>
                            
                            <tr>
                                
                                <input type="submit" name="submit" value="Submit"> 
                            </tr>
                            <tr>
                                
                                <?php
                                    if(isset($_SESSION['upw']))
                                    {
                                        echo "username or password incorrect!<br>";
                                    }
                                 
                                ?>
                                         
                            </tr>
                        </table>
                    </fieldset>

                </form>

            </td>
          
        </tr>

        <tr height="80px">
            <td colspan="3" align="center">
                <p>Copyright © 2017</p>
            </td>
        </tr>
    </table>
</body>
</html>