<?php
// Viết chương trình PHP liệt kê tất cả số nguyên tố có 5 chữ số.

/**
 * Kiểm tra n có là số nguyên tố không 
 * @param int $n kiểm tra SNT
 * @return bool
 */
function sNT(int $n): bool
{
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

/**
 * Liệt kê các số nguyên có 5 chứ số
 * @param null
 * @return string
 */
function lietKe(): string
{
    $lietke = "";
    for ($i = 9999; $i < 100000; $i++) {
        if (sNT($i)) {
            $lietke .= $i . "  ";
        }
    }
    return $lietke;
}

echo lietKe();
//expect: 10007 10009 10037 10039 10061 10067 .......  99901 99907 99923 99929 99961 99971 99989 99991
