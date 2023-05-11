<?php
// Viết chương trình tìm các số nguyên a, b, c, d khác nhau trong khoảng từ 0 tới 10 thỏa mãn điều kiện a*d*d = b*c*c*c.

/**
 * Tìm a,b,c,d thỏa mãn điều kiện
 * @param
 * @return string
 */
function timSoNguyen(): string
{
    $str = "";
    for ($a = 1; $a <= 9; $a++) {
        for ($b = 1; $b <= 9; $b++) {
            for ($c = 1; $c <= 9; $c++) {
                for ($d = 1; $d <= 9; $d++) {
                    if ($a != $b && $a != $c && $a != $d && $b != $c && $b != $d && $c != $d) {
                        if ($a * $d * $d == $b * $c * $c * $c) {
                            $str .= "($a,$b,$c,$d) ";
                        }
                    }
                }
            }
        }
    }
    return $str;
}
echo timSoNguyen();
//expect: (2,6,3,9) (3,6,2,4) (8,3,6,9) (8,9,2,3)