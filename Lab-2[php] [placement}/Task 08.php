<?php

$array = array(
    array('1', '2', '3', 'A'),
    array('1', '2', 'B', 'C'),
    array('1', 'D', 'E', 'F'),
);  

/// This is pattern 01 
$pattern1_k = 2;
for ($pattern1_i = 0; $pattern1_i < 3; $pattern1_i++)
{
    for ($pattern1_j = 0; $pattern1_j < 3; $pattern1_j++)
    {
        echo $array[$pattern1_i][$pattern1_j] . " ";
        if ($pattern1_k == $pattern1_j) {
            break;
        }
    }
    $pattern1_k--;
    echo "<br>";
}


/// This is pattern 02
$pattern2_k = 3;
for ($pattern2_i = 0; $pattern2_i < 3; $pattern2_i++)
{
    for ($pattern2_j = 0; $pattern2_j < 4; $pattern2_j++)
    {
        if ($pattern2_k <= $pattern2_j) {
            echo $array[$pattern2_i][$pattern2_j] . " ";
        }
    }
    $pattern2_k--;
    echo "<br>";
}

?>
