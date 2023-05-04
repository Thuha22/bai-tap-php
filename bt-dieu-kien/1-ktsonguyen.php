<?php

/**
 * Kiểm tra n có là số nguyên không 
 * @param $n kiểm tra só nguyên
 * @return bool
 */
function isInterger($n): bool
{
    if (is_int($n) == 1) {
        return true;
    }
    return false;
}
echo (isInterger(3)) ? 'TRUE' : 'FALSE';
//expect: TRUE
echo (isInterger(1.2343)) ? 'TRUE' : 'FALSE';
//expect: FALSE
