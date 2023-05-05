
<?php
// Nhập vào một chuỗi sau đó đảo ngược của chuỗi đó

/**
 * Đảo ngược chuỗi
 * @param string $n
 * @return string 
 */
function daoNguoc(string $n): string
{
    return strrev($n);
}

echo daoNguoc('hello');
//expect: olleh
