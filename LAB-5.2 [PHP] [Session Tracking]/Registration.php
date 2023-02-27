<html>
<head>
    <title>Registration</title>
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
            <td >
            <form method="post" action="registrationCheck.php">
                    <fieldset >
                        <legend>Registration</legend>
                       
                                    Name : 
                              <input type="text" name="name" value="<?php echo isset($_SESSION['name']) ? $_SESSION['name'] : ''  ?>">
                               <hr>
                                Email : 
                               
                               <input type="email" name="email" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''  ?>">
                            <hr>
                                Username : 
                             
                                    <input type="text" name="username" value="<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''  ?>">
                              
                            <hr>
                        
                                    Password : 
                               
                                    <input type="password" name="password" value="<?php echo isset($_SESSION['password']) ? $_SESSION['password'] : ''  ?>">
                               <hr>
                                    Confirm Password : 
                                
                                    <input type="password" name="confirmPassword" value="<?php echo isset($_SESSION['confirmPassword']) ? $_SESSION['confirmPassword'] : ''  ?>">
                                
                                <hr>
                                        <fieldset>
                                            <legend>Gender</legend>
                                            <input type="radio" name="gender" value="Male"/> Male
                                            <input type="radio" name="gender" value="Female"/> Female
                                            <input type="radio" name="gender" value="Other"/> Other <br>
                                        </fieldset>
                                
                           
                            <hr>
                                        <fieldset>
                                            <legend>Date of Birth</legend>
                                            <input type="date" name="dob" value="<?php echo isset($_SESSION['dob']) ? $_SESSION['dob'] : ''  ?>"/>
                                        </fieldset>
                                
                            

                            <hr>
                                <input type="submit" name="submit" value="Submit">            
                                <input type="reset" name="" value="Reset">
                            
                              
                                    <?php
                                        
                                        if(isset($_SESSION['submit'])) 
                                        {
                                            if($_SESSION['password'] != $_SESSION['confirmPassword'])
                                            {
                                                echo "Password does not match!!! <br>";
                                                exit;
                                            } 

                                            if(!isset($_SESSION['gender']))
                                            echo "Gender not selected. <br>";

                                            foreach ($_SESSION as $key => $value) {
                                                
                                                if($key[0] != '#')
                                                if (!isset($_SESSION[$key]) or empty($value)) {
                                                    echo $key. " not set! <br>";     
                                                    break;                                               
                                                }
                                            }
                                            

                                        }
                                        
                                        
                                       
                                    ?>
                                
                        </table>
                    </fieldset>

                </form>
            </td>
        </tr>
        <tr height="80px">
            <td colspan="3" align="center">
                <p>Copytight © 2017</p>
            </td>
        </tr>
        

    </table>
</body>
</html>