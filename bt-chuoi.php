<?php
function nhapChuoi(&$a)
{
    do {
        $a = readline("Nhập chuỗi (0-50):");
    } while (!(strlen($a) > 0 && strlen($a) < 50));
    var_dump($a);
}
/**
 * Kiểm tra xem trong chuỗi a có ký số hay không.
 */
function kiemTraKySo($a)
{
    for ($i = 0; $i < strlen($a); $i++) {
        if ($a[$i] >= '0' && $a[$i] <= '9') {
            return "Chuỗi $a có chứa ký số";
        }
    }
    return "Chuỗi $a không chứa ký số";
}

function kiemTraInHoa($a)
{
    for ($i = 0; $i < strlen($a); $i++) {
        if ($a[$i] >= 'A' && $a[$i] <= 'Z') {
            return "Chuỗi $a có chứa ký tự in hoa";
        }
    }
    return "Chuỗi $a không chứa ký tự in hoa";
}

function timKyTu($a)
{
    do {
        $ch = readline("Nhập ký tự ch:");
    } while (strlen($ch) != 1);
    if (strchr($a, $ch) != null) {
        return "Chuỗi $a có chứa ký tự $ch";
    }
    return "Chuỗi $a không chứa ký tự $ch";
}

function timChuoi($a)
{
    $b = readline("Nhập chuỗi b: ");
    if (strstr($a, $b) != null) {
        return "Chuỗi $a có chứa chuỗi $b";
    }
    return "Chuỗi $a không chứa chuỗi $b";
}
// echo timChuoi($a);

function checkDoiXung($a)
{
    $str1 = substr($a, 0, strlen($a) / 2);
    $str2 = substr($a, -strlen($a) / 2,);
    if ($str1 == strrev($str2)) {
        return "Chuỗi $a là chuỗi đối xứng";
    }
    return "Chuỗi $a không phải là chuỗi đối xứng";
}
// echo tinhDoiXung($a);

function demTu($a)
{
    return str_word_count($a);
}
// echo demTu('$a');

function catCuoiChuoi($a)
{
    $new = rtrim($a, " ");
    return "\"$new\"";
}

function catDauChuoi($a)
{
    $new = ltrim($a, " ");
    return "\"$new\"";
}

function checkChuanDauCach($a)
{
    for ($i = 0; $i < strlen($a) - 1; $i++) {
        while ($a[$i] == ' ' && $a[$i + 1] == ' ') {
            for ($j = $i; $j < strlen($a) - 1; $j++) {
                $a[$j] = $a[$j + 1];
            }
            $a[strlen($a) - 1] = "\0";
        }
    }
    return "\"$a\"";
}

function tinhTBKyTu($a)
{
    $tong = 0;
    for ($i = 0; $i <= strlen($a) - 1; $i++) {
        $tong += ord($a[$i]);
        var_dump($tong);
    }
    return $tong / strlen($a);
}

function lanKyTuXuatHien($a)
{
    for ($i = 0; $i < strlen($a); $i++) {
        $count = 0;
        $daDem = 0;
        for ($j = 0; $j < $i; $j++) {
            if ($a[$i] == $a[$j]) {
                $daDem = 1;
                break;
            }
        }
        if ($daDem == 0) {
            for ($j = $i; $j < strlen($a); $j++) {
                if ($a[$j] == $a[$i]) {
                    $count++;
                }
            }
            echo "Ký tự " . $a[$i] . " xuất hiện $count lần <br>";
        }
    }
}
echo lanKyTuXuatHien('gjfkikljfkjdf');

$chon = 1;
while ($chon != 0) {
    $chon = readline("Mời bạn chọn một mục:");
    switch ($chon) {
        case 1:
            nhapChuoi($a);
            break;
        case 2:
            echo kiemTraKySo($a) . "\n";
            break;
        case 3:
            echo kiemTraInHoa($a) . "\n";
            break;
        case 4:
            echo timKyTu($a) . "\n";
            break;
        case 5:
            echo timChuoi($a) . "\n";
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
            lanKyTuXuatHien($a) . "\n";
            break;
        default:
            echo "Hành động không hợp lệ! \n";
    }
}
