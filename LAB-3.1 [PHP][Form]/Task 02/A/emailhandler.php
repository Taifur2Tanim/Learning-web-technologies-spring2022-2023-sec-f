<!DOCTYPE html>
<html>
  <head>
    <title>email Handler</title>
  </head>
  <body>
    <?php
       if(isset($_POST['email']) && empty($_POST['email']) == false)
       {
           $email = $_POST['email'];
           echo "<h1>Email: $email</h1>";
       }else if(isset($_POST['email']))
       {
           echo "<p>Enter your email first </p>";
  
       }
    ?>
  </body>
</html>
