<?php
//In ra các số từ 1 đến 100 mà chia hết cho 3.
/**
 * In ra các số từ 1 đến 100 chia hết cho 3.
 * @param 
 * @return string
 */
function inDaySo(): string
{
    $str = "";
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 == 0) {
            $str .= $i . " ";
        }
    }
    return $str;
}

echo inDaySo();
//expect: 3 6 9 12 15 18 21 24 27 30 33 36 39 42 45 48 51 54 57 60 63 66 69 72 75 78 81 84 87 90 93 96 99
