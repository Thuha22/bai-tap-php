<?php

/** 
 * Viết chương trình nhập vào một số nguyên dương N và thực hiện:
 * - Số nguyên dương N có bao nhiêu chữ số?
 * - Tính tổng các chữ số của N.
 * - In ra chữ số lớn nhất của N.
 */

/**
 * N có bao nhiêu chữ số
 * @param int $n đếm chữ số
 * @return int
 */
function countDigits(int $n): int
{
    return strlen($n);
}

echo countDigits(123696) . "<br>";
//expect: 6

/**
 * Tính tổng các chữ só của N
 * @param int $n tính tổng
 * @return int
 */
function totalDigits(int $n): int
{
    $sum = array_sum(str_split($n));
    return $sum;
}

echo totalDigits(43456) . "<br>";
// expect: 22

/**
 * In ra chữ số lớn nhẩt
 * @param int $n in ra số lớn nhất
 * @return int
 */
function maxDigit(int $n): int
{
    $max = max(str_split($n));
    return $max;
}
echo maxDigit(354669);
//expect: 9
