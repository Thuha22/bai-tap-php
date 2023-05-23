<?php

/**
 * 1. Nhập một chuỗi a bất kỳ từ bàn phím có kích thước trong khoảng (0,50).
 */
function nhapChuoi(&$a)
{
    do {
        $a = readline("Nhập chuỗi (0-50):");
    } while (!(strlen($a) > 0 && strlen($a) < 50));
    return;
}
// a= "  ABc  12321  cBA  "

/**
 * 2. Kiểm tra xem trong chuỗi a có ký số hay không.
 * @param string $a 
 * @return string
 */
function kiemTraKySo(string $a): string
{
    for ($i = 0; $i < strlen($a); $i++) {
        if ($a[$i] >= '0' && $a[$i] <= '9') {
            return "Chuỗi \"$a\" có chứa ký số";
        }
    }
    return "Chuỗi \"$a\" không chứa ký số";
}
// expect: Chuỗi "  ABc  12321  cBA  " có chứa ký số

/**
 * 3. Kiểm tra xem trong chuỗi a có ký tự in HOA hay không.
 * @param string $a 
 * @return string
 */
function kiemTraInHoa(string $a): string
{
    for ($i = 0; $i < strlen($a); $i++) {
        if ($a[$i] >= 'A' && $a[$i] <= 'Z') {
            return "Chuỗi \"$a\" có chứa ký tự in hoa";
        }
    }
    return "Chuỗi \"$a\" không chứa ký tự in hoa";
}
//expect: Chuỗi "  ABc  12321  cBA  " có chứa ký tự in hoa

/**
 * 4. Nhập từ bàn phím một ký tự ch bất kỳ, kiểm tra xem trong chuỗi a có chứa ký tự đó hay không?
 * @param string $a
 * @return string
 */
function timKyTu(string $a): string
{
    do {
        $ch = readline("Nhập ký tự ch:");
    } while (strlen($ch) != 1);
    if (strchr($a, $ch) != null) {
        return "Chuỗi \"$a\" có chứa ký tự \"$ch\"";
    }
    return "Chuỗi \"$a\" không chứa ký tự \"$ch\"";
}
// $ch="j"
// expect: Chuỗi "  ABc  12321  cBA  " không chứa ký tự "j"

/**
 * 5. Nhập từ bàn phím một chuỗi b bất kỳ, kiểm tra xem b có nằm trong a hay không? Kiểm tra xem b có độ dài lớn hơn a hay không? Kiểm tra xem b có lớn hơn a hay không?
 * @param string $a
 * @return
 */
function timChuoi(string $a)
{
    $b = readline("Nhập chuỗi b: ");
    if (strstr($a, $b) != null) {
        echo "Chuỗi \"$a\" có chứa chuỗi \"$b\" \n";
    } else {
        echo "Chuỗi \"$a\" không chứa chuỗi \"$b\" \n";
    }
    if (strlen($b) > strlen($a)) {
        echo "Chuỗi \"$b\" có độ dài lớn hơn chuỗi \"$a\" \n";
    } else {
        echo "Chuỗi \"$b\" có độ dài không lớn hơn chuỗi \"$a\" \n";
    }
    if (strcmp($b, $a) > 0) {
        echo "Chuỗi \"$b\" lớn hơn chuỗi \"$a\"";
    } else {
        echo "Chuỗi \"$b\" không lớn hơn chuỗi \"$a\"";
    }
    return;
}
// $b= "123"
// expect:  Chuỗi "  ABc  12321  cBA  " có chứa chuỗi "123"
//          Chuỗi "123" có độ dài không lớn hơn chuỗi "  ABc  12321  cBA  "
//          Chuỗi "123" lớn hơn chuỗi "  ABc  12321  cBA  "

/**
 * 6. Kiểm tra xem chuỗi a có tính đối xứng hay không?
 * @param string $a
 * @return string
 */
function checkDoiXung(string $a): string
{
    $str1 = substr($a, 0, strlen($a) / 2);
    $str2 = substr($a, -strlen($a) / 2,);
    if ($str1 == strrev($str2)) {
        return "Chuỗi \"$a\" là chuỗi đối xứng";
    }
    return "Chuỗi \"$a\" không phải là chuỗi đối xứng";
}
// expect: Chuỗi "  ABc  12321  cBA  " là chuỗi đối xứng

/**
 * 7. Chuỗi a có bao nhiêu từ?
 * @param string $a
 * @return int
 */
function demTu(string $a): int
{
    $count = 0;
    for ($i = 0; $i < strlen($a) - 1; $i++) {
        if ($a[$i] == ' ' && $a[$i + 1] != ' ') {
            $count++;
        }
    }
    if ($a[0] != ' ') {
        $count++;
    }
    return $count;
}
// expect: 3

/**
 * 8. Cắt tất cả dấu cách (space) ở cuối chuỗi.
 * @param string $a
 * @return string 
 */
function catCuoiChuoi(string $a): string
{
    $new = rtrim($a, " ");
    return "\"$new\"";
}
// expect: "  ABc  12321  cBA"

/**
 * 9. Cắt tất cả dấu cách ở đầu chuỗi.
 * @param string $a
 * @return string  
 */
function catDauChuoi(string $a): string
{
    $new = ltrim($a, " ");
    return "\"$new\"";
}
// expect: "ABc  12321  cBA  "

/**
 * 10. Hãy đảm bảo rằng giữa hai từ bất kỳ của chuỗi a chỉ có một dấu cách.
 * @param string $a
 * @return string 
 */
function checkChuanDauCach(string $a): string
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
//expect: " ABc 12321 cBA "

/**
 * 11. Tính giá trị trung bình của tất cả các ký tự của chuỗi a theo thứ tự ký tự trong bảng mã ASCII (ví dụ nếu chuỗi là "123" thì ký tự '1' có vị trí 49, ký tự '2' có vị trí 50, ký tự '3' có vị trí 51, như vậy giá trị trung bình là 50).
 * @param string $a
 * @return float
 */
function tinhTBKyTu(string $a): float
{
    $tong = 0;
    for ($i = 0; $i <= strlen($a) - 1; $i++) {
        $tong += ord($a[$i]);
    }
    return $tong / strlen($a);
}
//expect: 50.789473684211

/**
 * 12. Đếm xem mỗi ký tự trong chuỗi a xuất hiện bao nhiêu lần. Ví dụ với chuỗi "V1StudyAll" thì ký tự 'l' xuất hiện 2 lần, các ký tự khác xuất hiện 1 lần.
 * @param string $a
 * @return
 */
function lanKyTuXuatHien(string $a)
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
            echo "Ký tự \"$a[$i]\" xuất hiện $count lần \n";
        }
    }
    return;
}
// expect:
// Ký tự " " xuất hiện 8 lần
// Ký tự "A" xuất hiện 2 lần
// Ký tự "B" xuất hiện 2 lần
// Ký tự "c" xuất hiện 2 lần
// Ký tự "1" xuất hiện 2 lần
// Ký tự "2" xuất hiện 2 lần
// Ký tự "3" xuất hiện 1 lần

/**
 * 13. Hãy chèn vào giữa ký tự có chỉ số 4 và 5 của chuỗi a một ký tự '\n'.
 * @param string $a
 * @return string
 */
function themKyTuN(string $a): string
{
    if (strlen($a) < 5) {
        return "Độ dài chuỗi a không thỏa mãn điều kiện để chèn";
    } else {
        for ($i = strlen($a) - 1; $i >= 5; $i--) {
            $a[$i + 1] = $a[$i];
        }
        $a[5] = "\n";
        return "\"$a\"";
    }
}
//expect: 
// "  ABc
//   12321  cBA  "

/**
 * 14. Hãy chèn vào giữa 2 ký tự in hoa bất kỳ của chuỗi a ký tự '\t'.
 * @param string $a
 * @return string
 */
function themKyTuT(string $a): string
{
    for ($i = 0; $i < strlen($a) - 1; $i++) {
        if (($a[$i] >= 'A' && $a[$i] <= 'Z') && ($a[$i + 1] >= 'A' && $a[$i + 1] <= 'Z')) {
            for ($j = strlen($a) - 1; $j >= $i + 1; $j--) {
                $a[$j + 1] = $a[$j];
            }
            $a[$i + 1] = "\t";
        }
    }
    return "\"$a\"";
}
//expect: "  A    Bc  12321  cB   A  "

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
