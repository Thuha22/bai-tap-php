<?php

/**
 * In ra tất cả các cặp số bè bạn nhỏ hơn n
 * (Các số bè bạn a, b là hai số nguyên mà tổng ước số của a bằng b và tổng các ước của b bằng a)
 */

/**
 * Tính tổng các ước số nhỏ hơn n của n
 * @param int $n tính tổng ước 
 * @return int 
 */
function totalDigits(int $n): int
{
    $tapuoc = array();
    $count = 0;
    for ($i = 1; $i < $n; $i++) {
        if ($n % $i == 0) {
            $tapuoc[$count] = $i;
        }
        $count++;
    }
    return array_sum($tapuoc);
}


/**
 * Liệt kê các cặp số bè bạn nhỏ hơn n 
 * @param int $n liệt kê cặp số bè bạn
 * @return string
 */
function strFriendNumber(int $n): string
{
    $str = "";
    for ($a = 1; $a < $n; $a++) {
        for ($b = $a + 1; $b < $n; $b++) {
            if (totalDigits($a) == $b && totalDigits($b) == $a) {
                $str .= $a . ' và ' . $b . ' , ';
            }
        }
    }
    return $str;
}

echo strFriendNumber(1300);
//expect: 220 và 284 , 1184 và 1210
