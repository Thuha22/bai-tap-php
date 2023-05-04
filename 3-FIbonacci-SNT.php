<?php
//  Liệt kê các số Fibonacci nhỏ hơn n là số nguyên tố

/**
 * Tìm số fibonacci x 
 * @param int $x số fibonacci thứ n 
 * @return int
 */
function soFibonacci(int $x): int
{
    if ($x < 2) {
        return $x;
    } else {
        return soFibonacci($x - 1) + soFibonacci($x - 2);
    }
}

/**
 * Kiểm tra x có lá số nguyên tố không
 * @param int $x kiểm tra số nguyên tố 
 * @return bool
 */
function CheckSNT(int $x): bool
{
    if ($x < 2) {
        return false;
    }

    for ($i = 2; $i < sqrt($x); $i++) {
        if ($x % $i == 0) {
            return false;
        }
    }
    return true;
}

/**
 * Liệt kê số Fibonacci là số nguyên tố nhỏ hơn n
 * @param int $n Liệt kê số Fibonacci là SNT nhỏ hơn n
 * @return string 
 */
function lietKe(int $n): string
{
    $ketqua = '';
    for ($i = 2; soFibonacci($i) < $n; $i++) {
        if (soFibonacci($i) && CheckSNT(soFibonacci($i))) {
            $ketqua .= soFibonacci($i) . ",";
        }
    }
    return $ketqua;
}

echo lietKe(100);
//expect: 2,3,5,13,89
