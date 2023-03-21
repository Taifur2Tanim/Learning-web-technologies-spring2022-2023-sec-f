<!DOCTYPE html>
<html>
  <head>
    <title>Name Handler</title>
  </head>
  <body>
    <?php
       if(isset($_POST['name']) && empty($_POST['name']) == false)
       {
           $name = $_POST['name'];
           echo "<p>Name: $name</p>";
       }else if(isset($_POST['name']))
       {
           echo "<p>enter your name first</p>";
  
       }
     
    ?>
  </body>
</html>
