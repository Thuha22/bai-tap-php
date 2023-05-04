<?php

function isSNT(int $x): bool
{
    if ($x == 0 || $x == 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($x); $i++) {
        if ($x % $i == 0) {
            return false;
        }
    }
    return true;
}

function isSieuSNT($n)
{
    $number = $n;
    for ($i = -2; $i < strlen($n); $i++) {
        $number = substr($number, 0, -1);
        var_dump($number);
    }
    var_dump(strlen($n));
    return;
}
echo isSieuSNT(123);
