<?php
//Tính tổng S= 1/2 + 1/4 + 1/6 + .... + 1/n

/**
 * Tính tổng của dãy số S
 * @param int $n tính tổng
 * @return float
 */
function tinhTong(int $n): float
{
    $tong = 0;
    $i = 2;
    while ($i <= $n) {
        $tong += (1 / $i);
        $i = $i + 2;
    }
    return $tong;
}

echo tinhTong(14);
//expect: 1.2964285714286
