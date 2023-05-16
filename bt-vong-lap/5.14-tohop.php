<?php
// Viết chương trình tính tổ hợp N chập K (với K <= N): C=((N-k+1) * (N-k+2)*…N)/1*2*3*…*k

/**
 * Tính giai thừa của n 
 * @param int $n 
 * @return float
 */

function tinhGiaiThua(int $n): float
{
    $t = 1;
    for ($i = 1; $i <= $n; $i++) {
        $t *= $i;
    }
    return $t;
}

/**
 * Tính tổ hợp chập k của N
 * @param int $k,$n
 * @return int 
 */
function tinhToHop(int $k, int $n): int
{
    $c = tinhGiaiThua($n) / (tinhGiaiThua($k) * tinhGiaiThua($n - $k));
    return $c;
}
$k = readline("Nhập k: ");
$n = readline("Nhập n: ");
echo "Tổ hợp chập $k của $n là " . tinhToHop($k, $n);
