<!DOCTYPE html>
<html>
  <head>
    <title>Gender Handler</title>
  </head>
  <body>
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

  </body>
</html>
