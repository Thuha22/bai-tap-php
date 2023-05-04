
<?php
// Viết chương trình tìm n số Fibonacci đầu tiên trong PHP.

/**
 * tìm số fibonacci x
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
 * tìm n số fibonacci đầu tiên
 * @param int $n số lượng số fibonacci cần tìm
 * @return string
 */
function timNSoFinbonacci(int $n): string
{
    $ketqua = '';
    for ($i = 1; $i <= $n; $i++) {
        $ketqua .= soFibonacci($i) . ", ";
    }
    return $ketqua;
}

echo timNSoFinbonacci(5);
// expect: 1, 1, 2, 3, 5
