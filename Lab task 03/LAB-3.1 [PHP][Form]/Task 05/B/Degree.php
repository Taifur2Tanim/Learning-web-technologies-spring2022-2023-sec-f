<html>
    <head>
        <title>DEGREE</title>
    </head>
    <body>
        <form method="post" style="width: 300px;">
            <fieldset>
            <legend>DEGREE</legend>
                
                <input type="checkbox" id="ssc" name="degree" value="SSC">
                <label for="ssc">SSC</label>
              
               <input type="checkbox" id="hsc" name="degree" value="HSC"> 
               <label for="hsc">HSC</label>
               
               <input type="checkbox" id="Bsc" name="degree" value="BSC">
               <label for="Bsc">Bsc</label>
               
               <input type="checkbox" id="Msc" name="degree" value="MSC">
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