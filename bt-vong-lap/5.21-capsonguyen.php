<?php
// Viết chương trình xác định tất cả các cặp số nguyên dương (A, B) sao cho A<B<1000 và (A^2+B^2+1)/AB là một số nguyên

/**
 * Tìm cặp số (A,B) thỏa mãn điều kiện
 * @param 
 * @return array
 */
function timCapSo(): array
{
    $arr = [];
    for ($a = 1; $a < 1000; $a++) {
        for ($b = $a + 1; $b < 1000; $b++) {
            if (($a * $a + $b * $b + 1) % ($a * $b) == 0) {
                $arr1 = ["$a,$b"];
                $arr = array_merge($arr, $arr1);
            }
        }
    }
    return $arr;
}

var_dump(timCapSo());
// expect: array(7) { [0]=> string(3) "1,2" [1]=> string(3) "2,5" [2]=> string(4) "5,13" [3]=> string(5) "13,34" [4]=> string(5) "34,89" [5]=> string(6) "89,233" [6]=> string(7) "233,610" }
