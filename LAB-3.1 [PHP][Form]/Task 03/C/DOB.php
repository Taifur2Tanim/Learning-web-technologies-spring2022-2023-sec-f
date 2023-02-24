<html>
    <head>
        <title>DOB</title>
    </head>
    <body>
        <form method="post" >
            <fieldset style="width:300px">
                <legend><b>DATE OF BIRTH</b></legend>
                <table>
                    <tr align="center">
                        <td>
                            <h4>dd</h4>
                            <input type="number" name="date" value="<?php echo isset($_POST['date']) ? $_POST['date'] : ''; ?>" style="width: 50px;"/> /
                        </td>
                        <td>
                            <h4>mm</h4>
                            <input type="number" name="month" value="<?php echo isset($_POST['month']) ? $_POST['month'] : ''; ?>" style="width: 50px;"/> /
                        </td>
                        <td>
                            <h4>yyyy</h4>
                            <input type="number" name="year" value="<?php echo isset($_POST['year']) ? $_POST['year'] : ''; ?>" style="width: 50px;"/>
                        </td>
                    </tr>
                    
                </table>
                <hr>
                <br>
            <input type="submit" name="" value="Submit">            
            </fieldset>
            
        </form>
        <?php
       if(isset($_POST['date'])  && empty($_POST['date']) == false  && isset($_POST['month'])  && empty($_POST['month']) == false && isset($_POST['year'])  && empty($_POST['year']) == false  )
       {
           $date = $_POST['date'];
           $month = $_POST['month'];
           $year = $_POST['year'];
           echo "<p>Date of Birth : $date/$month/$year</p>";
       }
  
       
       else if(isset($_POST['date']) && isset($_POST['month']) && isset($_POST['year']))
       {
           echo "<p>please fill Date of Birth</p>";
  
       }
       ?>
    </body>
</html>