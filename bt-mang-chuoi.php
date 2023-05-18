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
        echo $a[$i] . "\n";
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
        for ($j = 0; $j < strlen($a[$i]); $j++) {
            if (ord($a[$i][$j]));
        }
    }
}
echo maxBangMa(['123', 'ssdf']);


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
            echo checkDoiXung($a) . "\n";
            break;
        case 7:
            echo demTu($a) . "\n";
            break;
        case 8:
            echo catCuoiChuoi($a) . "\n";
            break;
        case 9:
            echo catDauChuoi($a) . "\n";
            break;
        case 10:
            echo checkChuanDauCach($a) . "\n";
            break;
        case 11:
            echo tinhTBKyTu($a) . "\n";
            break;
        case 12:
            echo lanKyTuXuatHien($a) . "\n";
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
