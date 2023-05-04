<?php
// liệt kê tất cả các số nguyên tố nhỏ hơn n.

/**
 * Kiểm tra n có là số nguyên tố không
 * @param int $n kiểm tra CheckSNT
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
 * Liệt kê các số nguyên tố nhỏ hơn n
 * @param int $n liệt kê SNT
 * @return string
 */
function lietKeSNT(int $n): string
{
    $lietke = "";
    for ($i = 2; $i < $n; $i++) {
        if (checkSNT($i)) {
            $lietke .= $i . " ";
        }
    }
    return  $lietke;
}

echo lietKeSNT(50);
//expect: 2 3 5 7 11 13 17 19 23 29 31 37 41 43 47
