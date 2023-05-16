<?php

/**
 * Hãy tạo ngẫu nhiên một mảng a gồm N phần tử nguyên sau đó thực hiện:
 * - Sắp xếp a theo thứ tự tăng dần
 * - Loại bỏ bớt các phần tử có giá trị giống nhau sao cho mỗi giá trị chỉ xuất hiện trong a duy nhất 1 lần.
 */
$color = ['blue', 'green', 'pink', 'orange', 'green', 'blue', 'orange', 'blue'];

/** 
 * Sắp xếp a theo thứ tự tăng dần
 * @param array $color sắp xếp
 * @return array 
 */
function sapXepTangDan(array $color): array
{
    sort($color);
    return $color;
}

var_dump(sapXepTangDan($color));
//array(8) { [0]=> string(4) "blue" [1]=> string(4) "blue" [2]=> string(4) "blue" [3]=> string(5) "green" [4]=> string(5) "green" [5]=> string(6) "orange" [6]=> string(6) "orange" [7]=> string(4) "pink" }

/**
 * Loại bỏ bớt các phần tử có giá trị giống nhau 
 * @param array $color loại bỏ giá trị giống nhau
 * @return array 
 */
function removeSameValue(array $color): array
{
    $t = array_unique($color);
    return $t;
}

var_dump(removeSameValue($color));
//expect:  array(4) { [0]=> string(4) "blue" [1]=> string(5) "green" [2]=> string(4) "pink" [3]=> string(6) "orange" }
