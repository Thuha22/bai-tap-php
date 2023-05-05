<?php
// Nhập vào một chữ cái in ra chữ cái đó 10 lần

/**
 * In ra chữ cái mười lần 
 * @param string $n
 * @return string
 */
function inNhieuLan(string $n): string
{
    $str = "";
    for ($i = 1; $i <= 10; $i++) {
        $str = $str . $n;
    }
    return $str;
}

echo inNhieuLan('a');
//expect: aaaaaaaaaa
