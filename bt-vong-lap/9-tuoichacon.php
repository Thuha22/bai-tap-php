<?php
//Nhập vào tuổi cha và con( tuổi cha hơn tuổi con ít nhất là 25). Đưa ra màn hình bao nhiêu năm nữa thì tuổi cha gấp đôi tuổi con.

/**
 * Tính số năm để tuổi cha gấp dôi tuổi con
 * @param int $a(tuổi cha),$b($tuổi con)
 * @return int
 */
function tinhNam(int $a, int $b): int
{
    $count = 0;
    while ($a != 2 * $b) {
        $a++;
        $b++;
        $count++;
    }
    return $count;
}

echo tinhNam(30, 2);
// expect:26
