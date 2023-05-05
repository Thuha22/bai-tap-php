<?php
// Bạn hãy viết chương trình tính tổng của 50 số 1, 2, 3, ..., 50.

/**
 * Tính tổng 50 số 
 * @param
 * @return int
 */
function tinhTong(): int
{
    $sum = 0;
    for ($i = 1; $i <= 50; $i++) {
        $sum += $i;
    }
    return $sum;
}

echo tinhTong();
//expect: 1275
