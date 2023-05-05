<?php
// Bạn hãy viết chương trình tình tổng của 50 số chẵn bắt đầu từ 2.

/**
 * Tính tổng 50 số chẵn 
 * @param
 * @return int 
 */
function tinhTong(): int
{
    $count = 0;
    $i = 2;
    $sum = 0;
    while ($count < 50) {
        if ($i % 2 == 0) {
            $sum += $i;
            $count++;
        }
        $i += 2;
    }
    return $sum;
}

echo tinhTong();
//expect: 2550
