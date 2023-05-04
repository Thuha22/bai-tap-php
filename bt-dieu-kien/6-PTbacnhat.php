<?php
// Bạn hãy viết một chương trình giải phương trình bậc nhất ax+b=0.

/**
 * Giải phương trình bậc nhất ax+b=0.
 * @param float $a, $b giải pt bậc nhất
 * @return float
 */
function giaiPT(float $a, float $b): float
{
    $kq = -$b / $a;
    return $kq;
}

echo giaiPT(2, -4);
//expect: 2
