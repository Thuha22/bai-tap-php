<?php
// tính tổng các chữ số của một số nguyên n

/**
 * Tính tổng các chữ số của n
 * @param int $n tính tổng
 * @return int 
 */
function totalDigits(int $n): int
{
    $sum = array_sum(str_split($n));
    return $sum;
}

echo totalDigits(258);
//expect: 15
