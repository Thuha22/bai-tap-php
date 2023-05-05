<?php
// Viết chương trình kiểm tra xem tháng t năm n có bao nhiêu ngày.

/**
 * Kiểm tra xem tháng t có bao nhiêu ngày.
 * @param int $t, $n tháng t có bao nhiêu ngày
 * @return int
 */
function soNgayTrongThang(int $t, int $n): int
{
    switch ($t) {
        case 2:
            if (($n % 4 == 0 && $n % 100 != 0) || ($n % 400 == 0)) {
                return 29;
            } else {
                return  28;
            }
            break;
        case 4:
        case 6:
        case 9:
        case 11:
            return 30;
        default:
            return 31;
    }
}

echo soNgayTrongThang(2, 2020);
//expect: 29
echo soNgayTrongThang(2, 1900);
//expect: 28 
echo soNgayTrongThang(3, 2021);
//expect: 31 
echo soNgayTrongThang(11, 2023);
//expect: 30