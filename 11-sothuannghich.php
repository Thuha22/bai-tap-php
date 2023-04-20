<?php
// Liệt kê  các số thuận nghịch có 4 chữ số.

function soThuanNghich($n)
{
    $my_array = str_split($n, 2);
    if ($my_array[0] ==  strrev($my_array[1])) {
        return true;
    }
    return false;
}

echo "Các số thuận nghịch có 4 chữ số là: <br>";
for ($i = 1000; $i < 10000; $i++) {
    if (soThuanNghich($i)) {
        echo $i . " ";
    }
}
