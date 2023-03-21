<html>
    <head>
        <title>Blood group</title>
    </head>
    <body>
    <?php

$selectedBloodGroup = isset($_POST['bloodGroup']) ? $_POST['bloodGroup'] : '';


?>
        <form method="post"  style="width: 300px;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <fieldset>
                <legend>BLOOD GROUP</legend>
                
                <select id="bloodGroup" name="bloodGroup">
    <option value="Not selected" <?php if ($selectedBloodGroup == ' ') echo 'selected'; ?>> </option>
    <option value="A+" <?php if ($selectedBloodGroup == 'A+') echo 'selected'; ?>>A+</option>
    <option value="B+" <?php if ($selectedBloodGroup == 'B+') echo 'selected'; ?>>B+</option>
    <option value="AB+" <?php if ($selectedBloodGroup == 'AB+') echo 'selected'; ?>>AB+</option>
    <option value="O+" <?php if ($selectedBloodGroup == 'O+') echo 'selected'; ?>>O+</option>
    <option value="A-" <?php if ($selectedBloodGroup == 'A-') echo 'selected'; ?>>A-</option>
    <option value="B-" <?php if ($selectedBloodGroup == 'B-') echo 'selected'; ?>>B-</option>
    <option value="AB-" <?php if ($selectedBloodGroup == 'AB-') echo 'selected'; ?>>AB-</option>
    <option value="O-" <?php if ($selectedBloodGroup == 'O-') echo 'selected'; ?>>O-</option>
  </select>
                <br>
                <hr style="width:100%;text-align:left;margin-left:0">
                <input type="submit" name="" value="Submit">
            </fieldset>
                      
        </form>
       
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["bloodGroup"])) {
              $selectedBloodGroup = $_POST["bloodGroup"];
              echo "Blood Group: " . $selectedBloodGroup;
            } 
          }
        ?>

    </body>
</html>