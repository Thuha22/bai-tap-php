<?php
// Kiểm tra xem 3 số a, b, c có thỏa mãn là 3 cạnh của một tam giác vuông cân không. 

/**
 * Kiểm tra 3 số có thỏa mãn là 3 cạnh của tam giác vuông cân không
 * @param int $a, $b, $c 
 * @return bool
 */
function isTamGiacVuongCan(int $a, int $b, int $c): bool
{
    $A = $a * $a;
    $B = $b * $b;
    $C =  $c * $c;
    //Điều kiện để a,b,c là 3 cạnh tam giác
    if ((($a + $b) > $c) && (($a + $c) > $b) && (($b + $c) > $a)) {
        //Điều kiện để tam giác vuông cân
        if (($A == $B + $C && $B == $C) || ($B == $A + $C && $A == $C) || ($C == $A + $B && $A == $B)) {
            return true;
        }
    }
    return false;
}

echo isTamGiacVuongCan(5, 7, 5) ? 'TRUE' : 'FALSE';
//expect: FALSE
