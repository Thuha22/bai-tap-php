<?php
//Cho 2 số a=5, b=10. Hãy đổi giá trị (hoán vị) 2 số a b cho nhau sao cho kết quả là: a=10, b=5.

/**
 * Hoán đổi giá trị của a và b
 * @param string $a, int $b hoán đổi giá trị
 * @return string
 */
function changeValue(string $a, string  $b): string
{
    $change = $b;
    $b = $a;
    $a = $change;
    return "a = $a, b = $b";
}

echo changeValue(5, 10);
//expect: a = 10, b = 5
echo changeValue('foo', 'bar');
//expect: a = bar, b = foo
