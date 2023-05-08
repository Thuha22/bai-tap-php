<?php
// Kiểm tra xem 3 số a, b, c có thỏa mãn là 3 cạnh của một tam giác vuông không. 

/**
 * Kiểm tra 3 số có thỏa mãn là 3 cạnh của tam giác vuông không
 * @param int $a, $b, $c 
 * @return bool
 */
function isTamGiacVuong(int $a, int $b, int $c): bool
{
    $A = $a * $a;
    $B = $b * $b;
    $C =  $c * $c;
    //Điều kiện để a,b,c là 3 cạnh tam giác
    if ((($a + $b) > $c) && (($a + $c) > $b) && (($b + $c) > $a)) {
        //Điều kiện để tam giác vuông(Định lý py-ta-go)
        if ($A == $B + $C || $B == $A + $C || $C == $A + $B) {
            return true;
        }
    }
    return false;
}

echo isTamGiacVuong(5, 3, 4) ? 'TRUE' : 'FALSE';
//expect: TRUE
echo isTamGiacVuong(5, 7, 9) ? 'TRUE' : 'FALSE';
//expect: FALSE
