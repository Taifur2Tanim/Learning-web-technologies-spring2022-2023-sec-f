<!DOCTYPE html>
<html>
  <head>
    <title>Gender Handler</title>
  </head>
  <body>
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

  </body>
</html>
