<?php

$a = 10;
$b = 20;
$c = -30;

$delta = $b**2 - 4*$a*$c;

if ($delta > 0) {
    $x1 = (-$b + sqrt($delta)) / (2*$a);
    $x2 = (-$b - sqrt($delta)) / (2*$a);
    echo "Phương trình có hai nghiệm phân biệt:\n";
    echo "x1 = $x1\n";
    echo "x2 = $x2\n";
} elseif ($delta == 0) {
    $x = -$b / (2*$a);
    echo "Phương trình có nghiệm kép:\n";
    echo "x = $x\n";
} else {
    echo "Phương trình không có nghiệm thực\n";
}

?>
