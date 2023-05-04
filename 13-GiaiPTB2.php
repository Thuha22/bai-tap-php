<?php
// giải phương trình bậc 2

/**
 * Giải phương trình bặc 2
 * @param int $a,$b,$c 
 * @return string
 */
function giaiPT(int $a,  int $b, int $c): string
{
    if ($a == 0 && $b == 0) {
        return "Phương trình vô nghiệm";
    } elseif ($a == 0 && $b != 0) {
        return "Phương trình có một nghiệm x=" . -$c / $b;
    } else {
        $delta = $b * $b - 4 * $a * $c;
        if ($delta < 0) {
            return "Phương trình vô nghiệm";
        } elseif ($delta == 0) {
            $x = -$b / (2 * $a);
            return "Phương trình có một nghiệm kép x1 = x2 =" . $x;
        } else {
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);
            return "Phương trình có hai nghiệm x1= " . $x1 . " , x2= " . $x2;
        }
    }
}

echo giaiPT(0, 0, 5) . '<br>';
//expect: Phương trình vô nghiệm
echo giaiPT(0, -7, 14) . '<br>';
//expect: Phương trình có một nghiệm x=2
echo giaiPT(2, -5, 3) . '<br>';
//expect: Phương trình có hai nghiệm x1= 1.5 , x2= 1
echo giaiPT(1, -2, 1) . '<br>';
//expect: Phương trình có một nghiệm kép x1 = x2 =1
echo giaiPT(4, -5, 7) . '<br>';
//expect: Phương trình vô nghiệm
