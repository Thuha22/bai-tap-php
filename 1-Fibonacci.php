
<?php
// Viết chương trình tìm n số Fibonacci đầu tiên trong PHP.

/**
 * tìm số fibonacci x
 * @param int $x số fibonacci thứ n
 * @return int
 */
function SoFibonacci(int $x): int
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
