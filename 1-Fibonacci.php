
<?php
// Viết chương trình tìm n số Fibonacci đầu tiên trong PHP.

function SoFibonacci($x)

{
    if ($x < 2) {
        return $x;
    } else {
        return SoFibonacci($x - 1) + SoFibonacci($x - 2);
    }
}

$n = 20;
for ($i = 0; $i < $n; $i++) {
    echo (SoFibonacci($i) . ", ");
}
