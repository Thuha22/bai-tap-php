<?php

/**
 * Kiểm tra n có phải số lẻ âm không 
 * @param int $n kiểm tra tính lẻ âm
 * @return bool
 */

function isSoLeAm(int $n): bool
{
    if ($n % 2 != 0 && $n < 0) {
        return true;
    }
    return false;
}

echo isSoLeAm(-17) ? 'TRUE' : 'FALSE';
//expect:TRUE
echo isSoLeAm(19) ? 'TRUE' : 'FALSE';
//expect: FALSE
