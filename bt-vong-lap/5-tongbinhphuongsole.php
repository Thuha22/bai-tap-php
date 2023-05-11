<?php
// Viết chương trình tính tổng bình phương các số lẻ từ 1 đến N
/**
 * Tính tổng bình phương các số lẻ
 * @param int $n
 * @return int 
 */
function tinhTong(int $n): int
{
    $tong = 0;
    for ($i = 0; $i <= $n; $i++) {
        if ($i % 2 != 0) {
            $tong = $tong + $i * $i;
        }
    }
    return $tong;
}

echo tinhTong(15);
// expect: 680
