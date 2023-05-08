<?php
// Bạn hãy viết chương trình tính tổng của 20 số 5, 10, 15, ..., 100.

/**
 * Tính tổng 20 số 5, 10, 15, ..., 100
 * @param 
 * @return int
 */
function tinhTong(): int
{
    $sum = 0;
    for ($i = 5; $i <= 100; $i += 5) {
        $sum += $i;
    }
    return $sum;
}

echo tinhTong();
//expect: 1050
