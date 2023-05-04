<?php
// phân tích số nguyên n thành các thừa số nguyên tố

/**
 * Phân tích n thành thừa số nguyên tố 
 * @param $n phân tích n 
 * @return string
 */
function phanTichSNT(int $n): string
{
    $i = 2;
    $kq = "";

    while ($n > 1) {
        if ($n % $i == 0) {
            $n = $n / $i;
            $kq .= $i . "x";
        } else {
            $i++;
        }
    }
    return $kq;
}

echo phanTichSNT(36);
//expect: 2x2x3x3
