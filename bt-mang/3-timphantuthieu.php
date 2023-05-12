<?php

/**
 * Bạn Nam đang sắp xếp hai danh sách A và B giống hệt nhau thành những thứ tự cụ thể. Sự sắp xếp của hai mảng là ngẫu nhiên.
 * Một số số đã bị loại khỏi Danh sách A. Bạn có thể tìm thấy các số còn thiếu từ A mà không làm rối thứ tự của anh ta không?
 * Chi tiết: Có nhiều bản sao trong danh sách, nhưng bạn cần tìm các số thừa, tức là B - A. In các số theo thứ tự tăng. In mỗi số bị thiếu một lần, ngay cả khi số đó bị thiếu nhiều lần.
 */

$a = [203, 204, 205, 206, 207, 208, 203, 204, 205, 206];
$b = [203, 204, 204, 205, 206, 207, 205, 208, 203, 206, 205, 206, 204];

/**
 * Tìm phần tử thiếu của mảng a
 * @param array $a,$b
 * @return array
 */
function phanTuThieu(array $a, array $b): array
{
    sort($a);
    sort($b);
    $kq = [];
    for ($i = 0; $i < count($a); $i++) {
        if ($b[$i] != $a[$i]) {
            $kq[] = $b[$i];
            array_shift($b);
            $i--;
        }
    }

    for ($j = $i; $j < count($b); $j++) {
        $kq[] = $b[$j];
    }
    // var_dump($kq);
    return array_unique($kq);
}
var_dump(phanTuThieu($a, $b));
//expect: array(3) { [0]=> int(204) [1]=> int(205) [2]=> int(206) }
