<?php
$a = 'gDhsjh7643';
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
// echo kiemTraKySo($a);

function kiemTraInHoa($a)
{
    for ($i = 0; $i < strlen($a); $i++) {
        if ($a[$i] >= 'A' && $a[$i] <= 'Z') {
            return "Chuỗi $a có chứa ký tự in hoa";
        }
    }
    return "Chuỗi $a không chứa ký tự in hoa";
}
// echo kiemTraInHoa($a);

function timKyTu($a)
{
    $ch = 'a';
    for ($i = 0; $i < strlen($a); $i++) {
        if ($a[$i] == $ch) {
            return "Chuỗi $a có chứa ký tự $ch";
        }
    }
    return "Chuỗi $a không chứa ký tự $ch";
}
// echo timKyTu($a);

function timChuoi($a)
{
    $b = '3f';
    if (strstr($a, $b) != null) {
        return "Chuỗi $a có chứa chuỗi $b";
    }
    return "Chuỗi $a không chứa chuỗi $b";
}
// echo timChuoi($a);

function tinhDoiXung($a)
{
    $str1 = substr($a, 0, strlen($a) / 2);
    $str2 = substr($a, -strlen($a) / 2,);
    if ($str1 == strrev($str2)) {
        return "Chuỗi $a là chuỗi đối xứng";
    }
    return "Chuỗi $a không phải là chuỗi đối xứng";
}
echo tinhDoiXung($a);

function demTu($a)
{
    return str_word_count($a);
}
echo demTu('$a');
