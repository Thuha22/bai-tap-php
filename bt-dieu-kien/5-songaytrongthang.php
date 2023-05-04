<?php
// Viết chương trình kiểm tra xem tháng t năm n có bao nhiêu ngày.

/**
 * Kiểm tra xem tháng t có bao nhiêu ngày.
 * @param int $t, $n tháng t có bao nhiêu ngày
 * @return string
 */
function soNgayTrongThang(int $t, int $n): string
{
    switch ($t) {
        case 2:
            if (($n % 4 == 0 && $n % 100 != 0) || ($n % 400 == 0)) {
                return "Tháng $t năm $n có 29 ngày";
            } else {
                return  "Tháng $t năm $n có 28 ngày";
            }
            break;
        case 4:
        case 6:
        case 9:
        case 11:
            return "Tháng $t năm $n có 30 ngày";
        default:
            return "Tháng $t năm $n có 31 ngày";
    }
}

echo soNgayTrongThang(2, 2020);
//expect: Tháng 2 năm 2020 có 29 ngày
echo soNgayTrongThang(2, 1900);
//expect: Tháng 2 năm 1900 có 28 ngày
echo soNgayTrongThang(3, 2021);
//expect: Tháng 3 năm 2021 có 31 ngày
echo soNgayTrongThang(11, 2023);
//expect: Tháng 11 năm 2023 có 30 ngày