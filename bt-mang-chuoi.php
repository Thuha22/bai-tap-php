<?php

/**
 * 1. Nhập N và nhập một mảng a gồm N chuỗi (0<N<=50 và mỗi chuỗi có kích thước tối đa 30).
 */
function nhapMang(&$a)
{
    do {
        $n = readline("Nhập số lượng phần tử mảng(0-50):");
    } while (!($n > 0 && $n <= 50));
    for ($i = 0; $i < $n; $i++) {
        $a[$i] = readline("Nhập vào a[$i]:");
    }
    // var_dump($a);
    return;
}

function output($a)
{
    for ($i = 0; $i < count($a); $i++) {
        echo "\"$a[$i]\"" . "\n";
    }
    return;
}

function maxSize($a)
{
    $max = strlen($a[0]);
    for ($i = 1; $i < count($a); $i++) {
        if (strlen($a[$i]) > $max) {
            $max = strlen($a[$i]);
        }
    }
    for ($j = 0; $j < count($a); $j++) {
        if (strlen($a[$j]) == $max) {
            return "Chuỗi có kích thước lớn nhất là:" . $a[$j];
        }
    }
}
function minSize($a)
{
    $min = strlen($a[0]);
    for ($i = 1; $i < count($a); $i++) {
        if (strlen($a[$i]) < $min) {
            $min = strlen($a[$i]);
        }
    }
    for ($j = 0; $j < count($a); $j++) {
        if (strlen($a[$j]) == $min) {
            return "Chuỗi có kích thước nhỏ nhất là:" . $a[$j];
        }
    }
}

function sizeTB($a)
{
    $tong = 0;
    for ($i = 0; $i < count($a); $i++) {
        $tong += strlen($a[$i]);
    }
    return $tong / count($a);
}

function lonHonSizeTB($a)
{
    $sizetb = sizeTB($a);
    for ($i = 0; $i < count($a); $i++) {
        if (strlen($a[$i]) > $sizetb) {
            echo "$a[$i] \n";
        }
    }
}
function sapXepTang($a)
{
    echo "Mảng sau khi sắp xếp theo thứ tự tăng dần là:\n";
    for ($i = 0; $i < count($a); $i++) {
        for ($j = $i + 1; $j < count($a); $j++) {
            if (strlen($a[$i]) > strlen($a[$j])) {
                $temp = $a[$i];
                $a[$i] = $a[$j];
                $a[$j] = $temp;
            }
        }
    }
    output($a);
    return;
}

function sapXepGiam($a)
{
    echo "Mảng sau khi sắp xếp theo thứ tự giảm dần là:\n";
    for ($i = 0; $i < count($a); $i++) {
        for ($j = $i + 1; $j < count($a); $j++) {
            if (strlen($a[$i]) < strlen($a[$j])) {
                $temp = $a[$i];
                $a[$i] = $a[$j];
                $a[$j] = $temp;
            }
        }
    }
    output($a);
    return;
}

function maxBangMa($a)
{
    $s = [];
    for ($i = 0; $i < count($a); $i++) {
        $s[$i] = 0;
        for ($j = 0; $j < strlen($a[$i]); $j++) {
            $s[$i] += ord($a[$i][$j]);
        }
    }
    var_dump($s);
    $max = $s[0];
    for ($i = 1; $i < count($s); $i++) {
        if ($s[$i] > $max) {
            $max = $s[$i];
        }
    }
    for ($i = 0; $i < count($a); $i++) {
        if ($s[$i] == $max) {
            clearstatcache();
            return "Chuỗi lớn nhất theo thứ tự ký tự trong bảng mã ASCII là:" . $a[$i];
        }
    }
}

function minBangMa($a)
{
    $s = [];
    for ($i = 0; $i < count($a); $i++) {
        $s[$i] = 0;
        for ($j = 0; $j < strlen($a[$i]); $j++) {
            $s[$i] += ord($a[$i][$j]);
        }
    }
    var_dump($s);
    $min = $s[0];
    for ($i = 1; $i < count($s); $i++) {
        if ($s[$i] < $min) {
            $min = $s[$i];
        }
    }
    for ($i = 0; $i < count($a); $i++) {
        if ($s[$i] == $min) {
            clearstatcache();
            return "Chuỗi nhỏ nhất theo thứ tự ký tự trong bảng mã ASCII là:" . $a[$i];
        }
    }
}

function sXTangBangMa($a)
{
    echo "Mảng sau khi sắp xếp tăng dần theo thứ tự ký tự trong bảng mã ASCII là:\n";
    $s = [];
    for ($i = 0; $i < count($a); $i++) {
        $s[$i] = 0;
        for ($j = 0; $j < strlen($a[$i]); $j++) {
            $s[$i] += ord($a[$i][$j]);
        }
    }
    var_dump($s);
    for ($i = 0; $i < count($s); $i++) {
        for ($j = $i + 1; $j < count($s); $j++) {
            if ($s[$i] > $s[$j]) {
                $temp = $a[$i];
                $a[$i] = $a[$j];
                $a[$j] = $temp;
            }
        }
    }
    output($a);
}

function sXGiamBangMa($a)
{
    echo "Mảng sau khi sắp xếp giảm dần theo thứ tự ký tự trong bảng mã ASCII là:\n";
    $s = [];
    for ($i = 0; $i < count($a); $i++) {
        $s[$i] = 0;
        for ($j = 0; $j < strlen($a[$i]); $j++) {
            $s[$i] += ord($a[$i][$j]);
        }
    }
    var_dump($s);

    for ($i = 0; $i < count($s); $i++) {
        for ($j = $i + 1; $j < count($s); $j++) {
            if ($s[$i] < $s[$j]) {
                $temp = $a[$i];
                $a[$i] = $a[$j];
                $a[$j] = $temp;
            }
        }
    }
    output($a);
}

/**
 * 8. Nhập vào từ bàn phím một chuỗi st có kích thước tối đa 30. Tìm những chuỗi trong mảng a có kích thước bằng chuỗi st. Tìm những chuỗi trong mảng a có chứa chuỗi st.
 */
function timChuoi($a)
{
    do {
        $st = readline("Nhập chuỗi st:");
    } while (strlen($st) > 30);
    echo "Các chuỗi của mảng a có kích thước bằng chuỗi st: \n";
    for ($i = 0; $i < count($a); $i++) {
        $size[$i] = strlen($a[$i]);
        if ($size[$i] == strlen($st)) {
            echo "$a[$i] \n";
        }
    }
    echo "Các chuỗi của mảng a có chứa chuỗi st: \n";
    for ($i = 0; $i < count($a); $i++) {
        if (strstr($a[$i], $st) != null) {
            echo "$a[$i] \n";
        }
    }
}

/**
 * 9. Tìm những chuỗi có tính đối xứng trong mảng a.
 */
function checkDoiXung(array $a)
{
    for ($i = 0; $i < count($a); $i++) {
        $str1 = substr($a[$i], 0, strlen($a[$i]) / 2);
        $str2 = substr($a[$i], -strlen($a[$i]) / 2,);
        if ($str1 == strrev($str2)) {
            echo "$a[$i] \n";
        }
    }
}

/**
 * 10. Hiển thị những chuỗi là địa chỉ email chuẩn (ví dụ "abc@def.com").
 * @param array $a
 * @return
 */
function checkEmail(array $a)
{
    for ($i = 0; $i < count($a); $i++) {
        if (filter_var($a[$i], FILTER_VALIDATE_EMAIL)) {
            echo "\"$a[$i]\" \n";
        }
    }
    return;
}

/**
 * 11. Tìm những chuỗi có chứa ký tự số.
 * @param array $a 
 * @return 
 */
function kiemTraKySo(array $a)
{
    for ($i = 0; $i < count($a); $i++) {
        for ($j = 0; $j < strlen($a[$i]); $j++) {
            if ($a[$i][$j] >= '0' && $a[$i][$j] <= '9') {
                echo "\"$a[$i]\" \n";
                break;
            }
        }
    }
    return;
}

/**
 * 12. Tìm những chuỗi có chứa ký tự in HOA.
 * @param array $a 
 * @return 
 */
function kiemTraInHoa(array $a)
{
    for ($i = 0; $i < count($a); $i++) {
        for ($j = 0; $j < strlen($a[$i]); $j++) {
            if ($a[$i][$j] >= 'A' && $a[$i][$j] <= 'Z') {
                echo "\"$a[$i]\" \n";
                break;
            }
        }
    }
    return;
}

/**
 * 13. Nhập từ bàn phím một ký tự c bất kỳ. Tìm những chuỗi có chứa ký tự c.
 * @param array $a
 * @return 
 */
function timKyTu(array $a)
{
    do {
        $c = readline("Nhập ký tự ch:");
    } while (strlen($c) != 1);
    for ($i = 0; $i < count($a); $i++) {
        if (strchr($a[$i], $c) != null) {
            return "Chuỗi $a có chứa ký tự $c";
        }
    }
    return "Chuỗi $a không chứa ký tự $c";
}

$chon = 1;
while ($chon != 0) {
    $chon = readline("Mời bạn chọn một mục:");
    switch ($chon) {
        case 1:
            nhapMang($a);
            break;
        case 2:
            echo maxSize($a) . "\n";
            echo minSize($a) . "\n";
            break;
        case 3:
            echo sizeTB($a) . "\n";
            break;
        case 4:
            echo lonHonSizeTB($a) . "\n";
            break;
        case 5:
            echo sapXepTang($a) . "\n";
            echo sapXepGiam($a) . "\n";
            break;
        case 6:
            echo maxBangMa($a) . "\n";
            echo minBangMa($a) . "\n";
            break;
        case 7:
            echo sXTangBangMa($a) . "\n";
            echo sXGiamBangMa($a) . "\n";
            break;
        case 8:
            echo timChuoi($a) . "\n";
            break;
        case 9:
            echo checkDoiXung($a) . "\n";
            break;
        case 10:
            echo checkEmail($a) . "\n";
            break;
        case 11:
            echo kiemTraKySo($a) . "\n";
            break;
        case 12:
            echo  kiemTraInHoa($a) . "\n";
            break;
        case 13:
            echo themKyTuN($a) . "\n";
            break;
        case 14:
            echo themKyTuT($a) . "\n";
            break;
        default:
            echo "Hành động không hợp lệ! \n";
    }
}
