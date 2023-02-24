<html>
    <head>
        <title>Blood group</title>
    </head>
    <body>
        <form method="post"  style="width: 300px;">
            <fieldset>
                <legend>BLOOD GROUP</legend>
                
                <select id="bloodGroup" name="bloodGroup">
                 <option value="Not selected"> </option>
                 <option value="A+">A+</option>
                 <option value="B+">B+</option>
                 <option value="AB+">AB+</option>
                 <option value="O+">O+</option>
                 <option value="A-">A-</option>
                 <option value="B-">B-</option>
                 <option value="AB-">AB-</option>
                 <option value="O-">O-</option>
                 </select>
                <br>
                <hr style="width:100%;text-align:left;margin-left:0">
                <input type="submit" name="" value="Submit">
            </fieldset>
                      
        </form>
         <?php
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["bloodGroup"])) {
    $bloodGroup = $_POST["bloodGroup"];
    echo "Blood Group: " . $bloodGroup;
  } 
}
?>

    </body>
</html>