<!DOCTYPE html>
<html>
  <head>
    <title>Date of birth Handler</title>
  </head>
  <body>
    <?php
       if(isset($_POST['date'])  && empty($_POST['date']) == false  && isset($_POST['month'])  && empty($_POST['month']) == false && isset($_POST['year'])  && empty($_POST['year']) == false  )
       {
           $date = $_POST['date'];
           $month = $_POST['month'];
           $year = $_POST['year'];
           echo "<p>Date of birht : $date/$month/$year</p>";
       }
  
       
       else if(isset($_POST['date']) && isset($_POST['month']) && isset($_POST['year']))
       {
           echo "<p>please fill Date of Birth</p>";
  
       }
     
    ?>
  </body>
</html>
