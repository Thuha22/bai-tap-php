<?php

/**
 * Hãy tạo ngẫu nhiên một mảng a gồm N phần tử nguyên sau đó thực hiện:
 * - Sắp xếp a theo thứ tự tăng dần
 * - Loại bỏ bớt các phần tử có giá trị giống nhau sao cho mỗi giá trị chỉ xuất hiện trong a duy nhất 1 lần.
 */
$color = ['blue', 'green', 'pink', 'orange', 'green', 'blue', 'orange', 'blue'];


// Sắp xếp a theo thứ tự tăng dần
function sapXepTangDan()
{
    global $color;
    sort($color);
    var_dump($color);
    return;
}

echo sapXepTangDan();
//array(8) { [0]=> string(4) "blue" [1]=> string(4) "blue" [2]=> string(4) "blue" [3]=> string(5) "green" [4]=> string(5) "green" [5]=> string(6) "orange" [6]=> string(6) "orange" [7]=> string(4) "pink" }

// Loại bỏ bớt các phần tử có giá trị giống nhau 
function removeSameValue()
{
    global $color;
    $t = array_unique($color);
    var_dump($t);
    return;
}

echo removeSameValue();
//array(4) { [0]=> string(4) "blue" [3]=> string(5) "green" [5]=> string(6) "orange" [7]=> string(4) "pink" }
