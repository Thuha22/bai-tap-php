<?php
// tính giai thừa của một số nguyên dương

/**
 * Tính giai thừa của só n
 * @param int $n Tính giai thừa
 * @return int
 */
function giaiThua(int $n): int
{
    $tich = 1;
    for ($i = 2; $i <= $n; $i++) {
        $tich = $tich * $i;
    }
    return $tich;
}

echo giaiThua(5);
//expect: 120
