<?php
// Kiểm tra xem 3 số a, b, c có thỏa mãn là 3 cạnh của một tam giác đều không. 

/**
 * Kiểm tra 3 số có thỏa mãn là 3 cạnh của tam giác đều không
 * @param int $a, $b, $c 
 * @return bool
 */
function isTamGiacDeu(int $a, int $b, int $c): bool
{
    //Điều kiện để a,b,c là 3 cạnh tam giác
    if (($a + $b) > $c && ($a + $c) > $b && ($b + $c) > $a) {
        //Điều kiện để tam giác đều
        if ($a == $b && $a == $c) {
            return true;
        }
    }
    return false;
}

echo isTamGiacDeu(6, 6, 6) ? 'TRUE' : 'FALSE';
//expect: TRUE
echo isTamGiacDeu(5, 7, 9) ? 'TRUE' : 'FALSE';
//expect: FALSE
