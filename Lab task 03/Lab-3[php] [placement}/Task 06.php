<?php
$fruits = array("apple", "banana", "orange", "mango", "kiwi");

$search = "orange"; 

$found = false; 


for ($i = 0; $i < count($fruits); $i++) {
  if ($fruits[$i] === $search) {
    $found = true;
    break;
  }
}

// Check if the element was found
if ($found) {
  echo $search . " was found in the array";
} else {
  echo $search . " was not found in the array";
}
?>
