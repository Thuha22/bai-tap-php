<?php
// Viết chương trình PHP liệt kê tất cả số nguyên tố có 5 chữ số.

function SNT($n)
{
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

echo "Các SNT có 5 chư số: <br>";
for ($i = 9999; $i < 100000; $i++) {
    if (SNT($i)) {
        echo $i . "  ";
    }
}
