<?php

$a = 0;
$b = 0;
$i = 0;

while ($i <= 5) {
    $a += 10;
    $b += 5;
    echo "Step $i: a = $a, b = $b<br>";
    $i++;
}

echo "End of the loop: a = $a, b = $b\n";
?>
