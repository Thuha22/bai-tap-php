<?php
//Liệt kê tất cả các số chính phương nhỏ hơn n

/**
 * Kiểm tra n có là số chính phương không
 * @param int $n kiểm tra số chính phương 
 * @return bool
 */
function isSquareNumber(int $n): bool
{
    if (sqrt($n) == (int)sqrt($n)) {
        return true;
    }
    return false;
}

/**
 * Liệt kê các số chính phương nhỏ hơn n 
 * @param int $n liệt kê số chính phương
 * @return string
 */
function lietKe(int $n): string
{
    $str = "";
    for ($i = 0; $i < $n; $i++) {
        if (isSquareNumber($i)) {
            $str .= $i . " ";
        }
    }
    return $str;
}

echo lietKe(100);
//expect: 0 1 4 9 16 25 36 49 64 81
