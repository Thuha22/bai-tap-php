<?php
// Liệt kê  các số thuận nghịch có 4 chữ số.

/**
 * Kiểm tra n có là số thuận nghịch không
 * @param int $n kiểm tra số thuận nghịch
 * @return bool
 */
function isSoThuanNghich(int $n): bool
{
    $my_array = str_split($n, 2);
    if ($my_array[0] ==  strrev($my_array[1])) {
        return true;
    }
    return false;
}

/**
 * Liệt kê các só thuận nghịch có 4 chứ số
 * @param null
 * @return string
 */
function lietKe(): string
{
    $lietke = "";
    for ($i = 1000; $i < 10000; $i++) {
        if (isSoThuanNghich($i)) {
            $lietke .=  $i . " ";
        }
    }
    return $lietke;
}

echo lietKe();
//expect: 1001 1111 1221 1331 1441 1551 ..... 9009 9119 9229 9339 9449 9559 9669 9779 9889 9999