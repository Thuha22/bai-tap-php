<?php

/**
 * Kiểm tra n có phải số lẻ âm không 
 * @param int $n kiểm tra tính lẻ âm
 * @return bool
 */

function tinhChanLe(int $n): bool
{
    if ($n % 2 != 0 && $n < 0) {
        return true;
    }
    return false;
}

echo tinhChanLe(-17) ? 'TRUE' : 'FALSE';
//expect:TRUE
echo tinhChanLe(19) ? 'TRUE' : 'FALSE';
//expect: FALSE
