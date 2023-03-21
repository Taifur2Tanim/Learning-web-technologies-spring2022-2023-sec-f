<html>
    <head>
        <title>DEGREE</title>
    </head>
    <body>
        <form method="post" style="width: 300px;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <fieldset>
            <legend>DEGREE</legend>
                
                <input type="checkbox" id="ssc" name="degree" value="SSC" <?php if(isset($_POST['degree']) && $_POST['degree'] == 'SSC') echo 'checked'; ?>>
                <label for="ssc">SSC</label>
              
               <input type="checkbox" id="hsc" name="degree" value="HSC" <?php if(isset($_POST['degree']) && $_POST['degree'] == 'HSC') echo 'checked'; ?>> 
               <label for="hsc">HSC</label>
               
               <input type="checkbox" id="Bsc" name="degree" value="BSC" <?php if(isset($_POST['degree']) && $_POST['degree'] == 'BSC') echo 'checked'; ?>>
               <label for="Bsc">Bsc</label>
               
               <input type="checkbox" id="Msc" name="degree" value="MSC" <?php if(isset($_POST['degree']) && $_POST['degree'] == 'MSC') echo 'checked'; ?>>
               <label for="Msc">Msc</label>
               <br>
               <hr style="width:100%;text-align:left;margin-left:0">
               <input type="submit" name="" value="Submit">
            </fieldset>
            <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
             if (isset($_POST["degree"]))
              {
               $degree = $_POST["degree"];
                   echo "Degree: " . $degree;
             }
            else {
                echo "Degree is not set";
             }
}
?>
 
        </form>
    </body>
</html>