<?php
// Tính tổng S = 1+2+3+4+5+....+n

/**
 * Tính tổng dãy số S
 * @param int $n tính tổng
 * @return int
 */
function tinhTong(int $n): int
{
    $tong = 0;
    $i = 1;
    while ($i <= $n) {
        $tong += $i;
        $i++;
    }
    return $tong;
}

echo tinhTong(15);
//expect: 120
