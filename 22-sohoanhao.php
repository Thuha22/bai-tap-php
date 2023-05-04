<?php

/**
 * Bạn hãy nhập vào một số N bất kỳ và kiểm tra xem N có phải số hoàn hảo hay không? 
 * (Số hoàn hảo là số nguyên dương có tổng các ước số nhỏ hơn nó bằng chính nó, ví dụ: 1+2+3 = 6, vậy 6 là số hoàn hảo)
 */

/**
 * Liệt kê các ước nhỏ hơn n của n
 * @param int $n liệt kê ước 
 * @return array
 */
function lietKeUoc(int $n): array
{
    $tapuoc = array();
    $count = 0;
    for ($i = 1; $i < $n; $i++) {
        if ($n % $i == 0) {
            $tapuoc[$count] = $i;
        }
        $count++;
    }
    return $tapuoc;
}

/**
 * Kiểm tra n có là số hoàn hảo không 
 * @param int $n kiểm tra số hoàn hảo
 * @return bool
 */
function isPerfectNumber(int $n): bool
{
    if (array_sum(lietKeUoc($n)) == $n) {
        return true;
    }
    return false;
}

echo (isPerfectNumber(28)  ? 'TRUE' : 'FALSE');
// expect: TRUE
