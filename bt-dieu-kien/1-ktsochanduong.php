<?php

/**
 * Kiểm tra n có phải số chẵn dương không 
 * @param int $n kiểm tra tính chẵn dương
 * @return bool
 */

function isSoChanDuong(int $n): bool
{
    if ($n % 2 == 0 && $n > 0) {
        return true;
    }
    return false;
}

echo isSoChanDuong(-14) ? 'TRUE' : 'FALSE';
//expect: FALSE
echo isSoChanDuong(28) ? 'TRUE' : 'FALSE';
//expect: TRUE
