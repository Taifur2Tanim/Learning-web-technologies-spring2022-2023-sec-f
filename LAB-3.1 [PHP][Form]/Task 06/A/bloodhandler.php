<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["bloodGroup"])) {
    $bloodGroup = $_POST["bloodGroup"];
    echo "Blood Group: " . $bloodGroup;
  } else {
    echo "Blood Group is not set";
  }
}
?>
