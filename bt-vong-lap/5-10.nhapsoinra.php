<?php
// Viết chương trình nhập vào 1 số từ 0 đến 9. In ra chữ số tương ứng. Ví dụ: nhập vào số 5, in ra "Năm".
/**
 * In ra chữ số tương ứng
 * @param int $n
 * @return string
 */
function inChuSo(int $n): string
{
    switch ($n) {
        case 0:
            return "Không";
        case 1:
            return "Một";
        case 2:
            return "Hai";
        case 3:
            return "Ba";
        case 4:
            return "Bốn";
        case 5:
            return "Năm";
        case 6:
            return "Sáu";
        case 7:
            return "Bảy";
        case 8:
            return "Tám";
        case 9:
            return "Chín";
        default:
            return "Nhập vào chữ số từ 0 đến 9";
    }
}
echo inChuSo(4);
//expect: Bốn
echo inChuSo(10);
//expect: Nhập vào chữ số từ 0 đến 9
