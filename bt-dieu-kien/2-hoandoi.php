<?php
//Cho 2 số a=5, b=10. Hãy đổi giá trị (hoán vị) 2 số a b cho nhau sao cho kết quả là: a=10, b=5.

/**
 * Hoán đổi giá trị của a và b
 * @param string $a, int $b hoán đổi giá trị
 * @return 
 */
function changeValue(string &$a, string  &$b)
{
    $change = $b;
    $b = $a;
    $a = $change;
    return;
}

$a = 'foo';
$b = 'bar';
echo $a; //expect:foo
echo $b; //expect: bar
changeValue($a, $b);
echo $a; //expect: bar
echo $b; //expect:foo
