<html>
    <head>
        <title>Form practice</title>
    </head>
    <body>
        <form method="post" style="width: 300px;">
            <fieldset>
                <legend>Gender</legend>
                <label for="male">Male</label>
                 <input type="radio" id="male" name="gender" value="Male">
                <label for="female">Female</label>
                <input type="radio" id="female" name="gender" value="Female">
                <label for="others">Other</label>
                <input type="radio" id="others" name="gender" value="Other">
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