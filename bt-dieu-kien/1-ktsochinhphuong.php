<?php
//Kiểm tra n có là số chính phương không

/**
 * Kiểm tra n có là số chính phương không
 * @param int $n kiểm tra số chính phương 
 * @return bool
 */
function isSquareNumber(int $n): bool
{
    if (sqrt($n) == (int)sqrt($n)) {
        return true;
    }
    return false;
}

echo (isSquareNumber(16)) ? 'TRUE' : 'FALSE';
//expect: TRUE
echo (isSquareNumber(23)) ? 'TRUE' : 'FALSE';
//expect: FALSE