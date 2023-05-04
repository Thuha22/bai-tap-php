<?php
//Viết chương trình PHP kiểm tra số đã cho có phải là số nguyên tố hay không.

/**
 * kiểm tra x có số số nguyên tố không
 * @param int $x kiểm tra x có số số nguyên tố không
 * @return bool
 */
function checkSNT(int $x): bool
{
    if ($x == 0 || $x == 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($x); $i++) {
        if ($x % $i == 0) {
            return false;
        }
    }
    return true;
}

echo (checkSNT(13) ? 'TRUE' : 'FALSE');
// expect: TRUE
