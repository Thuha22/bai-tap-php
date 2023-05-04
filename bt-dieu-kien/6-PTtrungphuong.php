<?php
// Bạn hãy viết một chương trình giải phương trình trùng phương ax^4+bx^2+c=0

function giaiPT(int $a,  int $b, int $c): string
{
    if ($a == 0 && $b == 0) {
        return "Phương trình vô nghiệm";
    } elseif ($a == 0 && $b != 0) {
        if ((-$c / $b) > 0) {
            return "Phương trình có hai nghiệm x1=" . sqrt(-$c / $b) . ", x2= " . -sqrt(-$c / $b);
        } elseif ((-$c / $b) == 0) {
            return "Phương trình có một nghiệm x= 0";
        } else {
            return "Phương trình vô nghiệm";
        }
    } else {
        $delta = $b * $b - 4 * $a * $c;
        if ($delta < 0) {
            return "Phương trình vô nghiệm";
        } elseif ($delta == 0) {
            $x = -$b / (2 * $a);
            if ($x > 0) {
                return "Phương trình có hai nghiệm x1=" . sqrt($x) . ", x2= " . -sqrt($x);
            } elseif ($x == 0) {
                return "Phương trình có một nghiệm x= 0";
            } else {
                return "Phương trình vô nghiệm";
            }
        } else {
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);
            if ($x1 > 0 && $x2 > 0) {
                return "Phương trình có bốn nghiệm x1=" . sqrt($x1) . ", x2= " . -sqrt($x1) . ", x3=" . sqrt($x2) . ", x4= " . -sqrt($x2);
            } elseif ($x1 == 0 && $x2 > 0) {
                return "Phương trình có ba nghiệm x1=0 " . ", x2=" . sqrt($x2) . ", x3= " . -sqrt($x2);
            } elseif ($x1 > 0 && $x2 == 0) {
                return "Phương trình có ba nghiệm x1=0 " . ", x2=" . sqrt($x1) . ", x3= " . -sqrt($x1);
            } elseif ($x1 > 0 && $x2 < 0) {
                return "Phương trình có hai nghiệm x1=" . sqrt($x1) . ", x2= " . -sqrt($x1);
            } elseif ($x1 < 0 && $x2 > 0) {
                return "Phương trình có hai nghiệm x1=" . sqrt($x2) . ", x2= " . -sqrt($x2);
            } else {
                return "Phương trình vô nghiệm";
            }
        }
    }
}

echo giaiPT(4, -7, 28) . '<br>';
//expect: Phương trình vô nghiệm
echo giaiPT(1, -5, 4) . '<br>';
//expect: Phương trình có bốn nghiệm x1=2, x2= -2, x3=1, x4= -1
echo giaiPT(2, 3, -5) . '<br>';
//expect: Phương trình có hai nghiệm x1=1, x2= -1
echo giaiPT(2, -2, 0) . '<br>';
//expect: Phương trình có ba nghiệm x1=0 , x2=1, x3= -1
