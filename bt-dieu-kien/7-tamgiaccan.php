<?php
// Kiểm tra xem 3 số a, b, c có thỏa mãn là 3 cạnh của một tam giác cân không. 

/**
 * Kiểm tra 3 số có thỏa mãn là 3 cạnh của tam giác cân không
 * @param int $a, $b, $c 
 * @return bool
 */
function isTamGiacCan(int $a, int $b, int $c): bool
{
    if ((($a + $b) > $c) && (($a + $c) > $b) && (($b + $c) > $a) && (($a == $b) || ($a == $c) || ($b == $c))) {
        return true;
    }
    return false;
}

echo isTamGiacCan(4, 4, 6) ? 'TRUE' : 'FALSE';
//expect: TRUE
echo isTamGiacCan(4, 7, 6) ? 'TRUE' : 'FALSE';
//expect:FALSE
