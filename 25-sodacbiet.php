<?php

/**
 * Hãy nhập vào một số nguyên n và kiểm tra n có phải là số đặc biệt hay không
 * Số đặc biệt là số có đặc điểm:Tổng lập phương các chữ số của số đó bằng chính nó
 */

/**
 * Kiểm tra n có là số đặc biệt không 
 * @param int $n kiểm tra số đặc biệt
 * @return bool
 */
function isSpecialNumber(int $n): bool
{
    $arrdigits = str_split($n);
    $total = 0;
    for ($i = 0; $i < count($arrdigits); $i++) {
        $total += $arrdigits[$i] * $arrdigits[$i] * $arrdigits[$i];
    }
    if ($total = $n) {
        return true;
    }
    return false;
}

echo (isSpecialNumber(153)) ? 'TRUE' : 'FALSE';
//expect: TRUE
