<html>
    <head>
        <title>Gender</title>
    </head>
    <body>
        <form method="post" style="width: 300px;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <fieldset>
                <legend>Gender</legend>
                <label for="male">Male</label>
               <input type="radio" id="male" name="gender" value="male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked'; ?>>
               <label for="female">Female</label>
               <input type="radio" id="female" name="gender" value="female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked'; ?>>
               <label for="other">other</label>
               <input type="radio" id="other" name="gender" value="other" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'other') echo 'checked'; ?>>
               <br>
                <hr style="width:100%;text-align:left;margin-left:0">
                <input type="submit" name="" value="Submit">
            </fieldset>
            <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
             if (isset($_POST["gender"]))
              {
               $gender = $_POST["gender"];
                   echo "Gender: " . $gender;
             }
            else {
                echo "Gender is not set";
             }
}
?>     
        </form>
    </body>
</html>