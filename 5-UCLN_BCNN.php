<?php
// tìm ước số chung lớn nhất (USCLN) và bội số chung nhỏ nhất (BSCNN) của hai số nguyên dương a và b.

/**
 * Tìm UCLN của a và b
 * @param int $a,$b tìm UCLN
 * @return int
 */
function ucln(int $a, int $b): int
{
    if ($b == 0) {
        return $a;
    }
    while ($b != 0) {
        $sochia = $b;
        $b = $a % $b;
        $a = $sochia;
    }
    return $a;
}

echo ucln(49, 28);
//expect 7

/**
 * Tìm BCNN của a và b
 * @param int $a,$b tìm BCNN
 * @return int
 */
function bcnn(int $a, int $b): int
{
    return ($a * $b) /  ucln($a, $b);
}

echo bcnn(30, 36);
//expect 180
