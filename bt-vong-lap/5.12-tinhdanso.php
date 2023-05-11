<?php
// Viết chương trình tính dân số của một thành phố sau 10 năm nữa, biết rằng dân số hiện nay là 6.000.000, tỉ lệ tăng dân số hàng năm là 1.8% .

/**
 * Tính dân số sau 10 năm
 * @param
 * @return int 
 */
function tinhDanso(): int
{
    $danso = 6000000;
    for ($i = 1; $i <= 10; $i++) {
        $danso += ($danso * 1.8) / 100;
    }
    return floor($danso);
}
echo tinhDanso();
// expect: 7171814