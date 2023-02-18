<?php

for ($row = 1; $row <= 3; $row++)
{
    for ($col = 1; $col <= $row; $col++)
    {
        echo "* ";
    }
    echo "<br>";
}

echo "<br>";
echo "<br>";

for ($row = 3; $row >= 1; $row--)
{
    for ($col = 1; $col <= $row; $col++)
    {
        echo $col . " ";
    }
    echo "<br>";
}

echo "<br>";
echo "<br>";

$char = "A";
for ($row = 3; $row >= 1; $row--)
{
    for ($col = 1; $col <= $row; $col++)
    {
        echo $char . " ";
        $char++;
    }
    echo "<br>";
    $char = "A";
}

?>
