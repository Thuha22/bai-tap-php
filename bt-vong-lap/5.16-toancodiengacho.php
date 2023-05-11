<?php

/**
 * Vừa gà vừa chó
 * Bó lại cho tròn
 * Ba mươi sáu con
 * Một trăm chân chẵn
 * Hỏi có bao nhiêu con gà, bao nhiêu con chó?
 */

/**
 * Tính số gà($x), chó($y)
 * @param
 * @return string
 */
function giaiToan(): string
{
    $str = "";
    for ($x = 1; $x <= 36; $x++) {
        for ($y = 1; $y <= 36; $y++) {
            if ($x + $y == 36 && 2 * $x + 4 * $y == 100) {
                $str .= "($x,$y) ";
            }
        }
    }
    return $str;
}

echo giaiToan();
//expect: (22,14)
