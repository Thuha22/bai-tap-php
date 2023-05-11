<?php
// Viết chương trình nhập vào x, n tính: sprt(x + sqrt(x + (sqrt(x))) (n dấu căn)

/**
 * Tính giá trị dãy
 * @param int $x, $n
 * @return float
 */
function tinhGiaTri(int $x, int $n): float
{
    $s = sqrt($x);
    for ($i = 1; $i < $n; $i++) {
        $s = sqrt($x + $s);
        var_dump($s);
    }
    return $s;
}
echo tinhGiaTri(4, 3);
//expect: 2.5395845610617
