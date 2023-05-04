<?php
// chuyển số nguyên n từ hệ thập phân sang hệ cơ số b

/**
 * Chuyển só n sang hệ cơ só b
 * @param int $n,$b chuyển n sang hệ b
 * @return string
 */
function heCoSo(int $n, int $b): string
{
    if ($n < 0 || $b < 2 || $b > 16) {
        return false;
    }

    $kq = "";
    $sodu = 0;
    $thuong = $n;
    while ($thuong > 0) {
        if ($b > 10) {
            $sodu = $thuong % $b;
            if ($sodu >= 10) {
                $kq =  $kq . chr(55 + $sodu);
            } else {
                $kq = $kq . $sodu;
            }
        } else {
            $kq = $kq . ($thuong % $b);
        }
        $thuong = floor($thuong / $b);
    }
    return strrev($kq);
}

echo heCoSo(15, 2);
// expect: 1111
