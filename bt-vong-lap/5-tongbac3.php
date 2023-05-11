<?php
// Viết chương trình tính tổng bậc 3 của N số nguyên đầu tiên.

/**
 * Tính tổng bậc ba của n số nguyên 
 * @param int $n
 * @return int
 */
function tinhTong(int $n): int
{
    $tong = 0;
    for ($i = 0; $i < $n; $i++) {
        $tong = $tong + $i * $i * $i;
    }
    return $tong;
}

echo tinhTong(5);
// expect: 100
