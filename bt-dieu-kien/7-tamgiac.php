<?php
// Kiểm tra xem 3 số a, b, c có thỏa mãn là 3 cạnh của một tam giác không. 

/**
 * Kiểm tra 3 số có thỏa mãn là 3 cạnh của tam giác không
 * @param int $a, $b, $c 
 * @return bool
 */
function isTamGiac(int $a, int $b, int $c): bool
{
    if (($a + $b) > $c && ($a + $c) > $b && ($b + $c) > $a) {
        return true;
    }
    return false;
}

echo isTamGiac(4, 6, 7) ? 'TRUE' : 'FALSE';
//expect: TRUE
echo isTamGiac(5, 2, 8) ? 'TRUE' : 'FALSE';
//expect: FALSE
