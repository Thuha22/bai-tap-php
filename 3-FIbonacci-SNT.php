<?php
//  liệt kê các số Fibonacci nhỏ hơn n là số nguyên tố, với n = 1000

function SoFibonacci($x)
{
    if ($x < 2) {
        return $x;
    } else {
        return SoFibonacci($x - 1) + SoFibonacci($x - 2);
    }
}

function CheckSNT($x)
{
    if ($x < 2) {
        return false;
    }

    for ($i = 2; $i < sqrt($x); $i++) {
        if ($x % $i == 0) {
            return false;
        }
    }
    return true;
}

$n = 90;
for ($i = 2; $i < $n; $i++) {
    if (SoFibonacci($i) < $n && CheckSNT(SoFibonacci($i)) == true) {
        echo (SoFibonacci($i) . ", ");
    }
}
