<?php
// Viết chương trình nhập vào x, n tính: 1 + x/2 + ... x^n/(n+1)

/**
 * Tính giá trị của dãy
 * @param int $x,$n
 * @return float
 */
function tinhGiaTri(int $x, int $n): float
{
    $t = 0;
    for ($i = 0; $i <= $n; $i++) {
        $t += pow($x, $i) / ($i + 1);
    }
    return $t;
}

echo tinhGiaTri(2, 3);
//expect: 5.33
