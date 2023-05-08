<?php
// Cho một dãy số vô hạn như sau: 123456789101112131415.... Hãy cho biết chữ số thứ n của dãy số có giá trị bao nhiêu

/**
 * Chữ số thứ n của dãy số có giá trị bao nhiêu
 * @param int $n số thứ n của dãy
 * @return string
 */
function valueOfDigit(int $n): string
{
    $str = "";
    $i = 1;
    while (strlen($str) < $n) {
        $str .= $i;
        $i++;
    }
    $value = str_split($str)[$n - 1];
    var_dump($value);
    return $value;
}

echo valueOfDigit(23);
//expect: 6
