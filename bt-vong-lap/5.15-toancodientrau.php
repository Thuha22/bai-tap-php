<?php

/**
 * 15. Viết chương trình giải bài toán cổ điển sau:
 * Trăm trâu, trăm cỏ
 *Trâu đứng ăn năm
 * Trâu nằm ăn ba,
 * Ba trâu già ăn một
 * Hỏi mỗi loại trâu có bao nhiêu con.
 */

/**
 * Tính số trâu đứng($x), trâu nằm($y), trâu già($z)
 * @param
 * @return string
 */
function giaiToan(): string
{
    $str = "";
    for ($x = 1; $x <= 20; $x++) {
        for ($y = 1; $y <= 33; $y++) {
            $z = 100 - $x - $y;
            if (5 * $x + 3 * $y + $z / 3 == 100 && $z % 3 == 0) {
                $str .= "($x,$y,$z) ";
            }
        }
    }
    return $str;
}

echo giaiToan();
//expect: (4,18,78) (8,11,81) (12,4,84)
