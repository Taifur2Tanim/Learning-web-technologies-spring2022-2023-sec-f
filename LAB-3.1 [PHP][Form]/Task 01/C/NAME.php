<!DOCTYPE html>
<html >
<head>
    <title>Name</title>
</head>
<body>
    <fieldset style="width:300px">
                     <legend> <h3>NAME</h3></legend>
                            <form method="post">

                               <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>" > 
                                <br>
                                <hr style="width:100%;text-align:left;margin-left:0">
                                <br>
                                <input type="Submit" name="Submit" value="Submit">
                            </form>


    </fieldset>
    
     <?php
            
     if(isset($_POST['name']) && empty($_POST['name']) == false)
     {
         $name = $_POST['name'];
         echo "<p>Name: $name</p>";
     }else if(isset($_POST['name']))
     {
         echo "<p>Fill the box first</p>";

     }
 ?>
    
</body>
</html>