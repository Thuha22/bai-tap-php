<?php
// Liệt kê n số nguyên tố đầu tiên trong PHP

/**
 * Kiểm tra n có là số nguyên tố không
 * @param int $n kiểm tra SNT
 * @return bool
 */
function checkSNT(int $n): bool
{
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

/**
 * Liệt kê n số nguyên tố đầu tiên
 * @param int $n liệt kê SNT
 * @return string
 */
function lietKe(int $n): string
{
    $count = 0;
    $i = 2;
    $lietke = "";
    while ($count < $n) {
        if (checkSNT($i)) {
            $lietke .= $i . " ";
            $count++;
        }
        $i++;
    }
    return $lietke;
}

echo lietKe(20);
// expect: 2 3 5 7 11 13 17 19 23 29 31 37 41 43 47 53 59 61 67 71
