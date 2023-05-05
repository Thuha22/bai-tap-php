<?php

/**
 * Kiểm tra tính chẵn lẻ của n
 * @param int $n kiểm tra tính chẵn lẻ
 * @return bool
 */

function isSoChanLe(int $n): bool
{
    if ($n % 2 == 0) {
        return true;
    }
    return false;
}

echo (isSoChanLe(13)) ? "số chẵn" : "số lẻ";
//expect: số lẻ
echo (isSoChanLe(36)) ? "số chẵn" : "số lẻ";
//expect: số chẵn
