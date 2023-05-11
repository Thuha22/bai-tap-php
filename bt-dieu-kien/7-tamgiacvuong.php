<?php
// Kiểm tra xem 3 số a, b, c có thỏa mãn là 3 cạnh của một tam giác vuông không. 

/**
 * Kiểm tra 3 số có thỏa mãn là 3 cạnh của tam giác không
 * @param int $a, $b, $c 
 * @return bool
 */
function isTamGiac(int $a, int $b, int $c): bool
{
    if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
        return true;
    }
    return false;
}

/**
 * Kiểm tra 3 số có thỏa mãn là 3 cạnh của tam giác vuông không
 * @param int $a, $b, $c 
 * @return bool
 */
function isTamGiacVuong(int $a, int $b, int $c): bool
{
    $bpA = $a * $a;
    $bpB = $b * $b;
    $bpC =  $c * $c;
    if (isTamGiac($a, $b, $c) && ($bpA == $bpB + $bpC || $bpB == $bpA + $bpC || $bpC == $bpA + $bpB)) {
        return true;
    }
    return false;
}

echo isTamGiacVuong(5, 3, 4) ? 'TRUE' : 'FALSE';
//expect: TRUE
echo isTamGiacVuong(5, 7, 9) ? 'TRUE' : 'FALSE';
//expect: FALSE
