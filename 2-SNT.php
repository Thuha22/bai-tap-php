<?php
//Viết chương trình PHP kiểm tra số đã cho có phải là số nguyên tố hay không.

function CheckSNT($x)
{
    for ($i = 2; $i <= sqrt($x); $i++) {
        if ($x % $i == 0) {
            return false;
        }
    }
    return true;
}

$x = 0;
if (CheckSNT($x) && $x != 0 && $x != 1) {
    echo "$x là SNT";
} else {
    echo "$x không phải là SNT";
}
