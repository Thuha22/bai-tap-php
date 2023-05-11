<?php
// Kiểm tra xem 3 số a, b, c có thỏa mãn là 3 cạnh của một tam giác vuông cân không. 

/**
 * Kiểm tra 3 số có thỏa mãn là 3 cạnh của tam giác không
 * @param int $bp_a, $b, $bp_c 
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

/**
 * Kiểm tra 3 số có thỏa mãn là 3 cạnh của tam giác vuông cân không
 * @param int $a, $b, $c 
 * @return bool
 */
function isTamGiacVuongCan(int $a, int $b, int $c): bool
{
    if (isTamGiacVuong($a, $b, $c) && ($b == $c || $a == $c || $a == $b)) {
        return true;
    }

    return false;
}

echo isTamGiacVuongCan(5, 7, 5) ? 'TRUE' : 'FALSE';
//expect: FALSE
