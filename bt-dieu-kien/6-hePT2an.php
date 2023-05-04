<?php
// Bạn hãy viết một chương trình giải hệ phương trình bậc nhất hai ẩn (A1x +B1y = C1)&&(A2x +B2y = C2)

/**
 * Giải hệ pt bậc nhất hai ẩn (sử dụng phương pháp cramer)
 * @param int $a1, $b1, $c1, $a2, $b2, $c2 giải hệ pt
 * @return string
 */
function giaiHePT(int $a1, int $b1, int $c1, int $a2, int $b2, int $c2): string
{
    $d = $a1 * $b2 - $a2 * $b1;
    $dx = $c1 * $b2 - $c2 * $b1;
    $dy = $a1 * $c2 - $a2 * $c1;
    if ($d == 0 && ($dx + $dy) == 0) {
        return "Hệ phương trình có vô số nghiệm";
    } elseif ($d == 0 && ($dx + $dy) != 0) {
        return "Hệ phương trình vô nghiệm";
    } else {
        $x = $dx / $d;
        $y = $dy / $d;
        return "Hệ phương trình có một cặp nghiệm (x,y)= ($x,$y)";
    }
}

echo giaiHePT(2, -3, 1, 4, 1, 9);
//expect: Hệ phương trình có một cặp nghiệm (x,y)= (2,1)
echo giaiHePT(2, 1, 1, 2, 1, 9);
//expect: Hệ phương trình vô nghiệm
echo giaiHePT(2, 1, 8, 4, 2, 16);
//expect: Hệ phương trình có vô số nghiệm
