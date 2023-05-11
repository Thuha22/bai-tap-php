<?php
// Viết chương trình tính tổ hợp N chập K (với K <= N): C=((N-k+1) * (N-k+2)*…N)/1*2*3*…*k

/**
 * Tính giai thừa của n 
 * @param int $n 
 * @return int
 */
function tinhGiaiThua(int $n): int
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

echo tinhToHop(3, 6);
//expect: 20
