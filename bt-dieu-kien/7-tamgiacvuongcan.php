<?php
// Kiểm tra xem 3 số a, b, c có thỏa mãn là 3 cạnh của một tam giác vuông cân không. 

/**
 * Kiểm tra 3 số có thỏa mãn là 3 cạnh của tam giác vuông cân không
 * @param int $a, $b, $c 
 * @return bool
 */
function isTamGiacVuongCan(int $a, int $b, int $c): bool
{
    if ((($a + $b) > $c) && (($a + $c) > $b) && (($b + $c) > $a) && ((($a * $a == $b * $b + $c * $c) && $b == $c) || (($b * $b == $a * $a + $c * $c) && $a = $c) || (($c * $c == $a * $a + $b * $b) && $a == $b))) {
        return true;
    }
    return false;
}

echo isTamGiacVuongCan(5, 7, 5) ? 'TRUE' : 'FALSE';
//expect: FALSE
