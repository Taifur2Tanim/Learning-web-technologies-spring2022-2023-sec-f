<html>
    <head>
        <title>Form practice</title>
    </head>
    <body>
        <form method="post" action="genderhandler.php" style="width: 300px;">
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
                      
        </form>
    </body>
</html>