<?php
// Tìm tất cả các phương án kết hợp 3 loại giấy bạc 1000đ, 2000đ, 5000đ với nhau để cho ra số tiền N đ, N>=1000đ và N%1000==0. Đưa ra phương án tối ưu ứng với số tờ tiền là ít nhất.

/**
 * Đổi N đồng thành 3 loại giấy bạc
 * @param int $n
 * @return string 
 */
function doiTien(int $n): string
{
    if ($n >= 1000 && $n % 1000 == 0) {
        $namk = floor($n / 5000);
        $haik = floor(($n - $namk * 5000) / 2000);
        $motk = ($n - $namk * 5000 - $haik * 2000) / 1000;
        return "$namk tờ 5000, $haik tờ 2000, $motk tờ 1000";
    } else {
        return "Nhập vào số tiền > 1000 và là bội của 1000";
    }
}

echo doiTien(13000);
// expect: 2 tờ 5000, 1 tờ 2000, 1 tờ 1000
