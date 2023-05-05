<?php
//In ra các số từ 99 đến 1 mà chia hết cho 7.
/**
 * In ra các số từ 99 đến 1 chia hết cho 7.
 * @param 
 * @return string
 */
function inDaySo(): string
{
    $str = "";
    for ($i = 99; $i >= 1; $i--) {
        if ($i % 7 == 0) {
            $str .= $i . " ";
        }
    }
    return $str;
}

echo inDaySo();
//expect: 98 91 84 77 70 63 56 49 42 35 28 21 14 7
