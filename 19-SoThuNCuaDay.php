<?php
//Cho dãy số vô hạn: 50, 51, 53, 56, 60, ... Hãy in ra số thứ 2021.

/**
 * Tìm số thứ n trong dãy
 * @param int $n số thứ n
 * @return int 
 */
function soThuN(int $n): int
{
    if ($n <= 1) {
        return 50;
    } else {
        return soThuN($n - 1) + ($n - 1);
    }
}

echo soThuN(2021);
//expect: 2041260
