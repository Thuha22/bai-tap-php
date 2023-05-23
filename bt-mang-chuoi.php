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
    return;
}
// a=["hello","abc@gmail.com","lap trinh 123","helloolleh","     ABC    def    gh   "]

// In ra mảng a
function output($a)
{
    echo "a = [";
    for ($i = 0; $i < count($a); $i++) {
        echo "\"$a[$i]\"" . ",";
    }
    echo "]";
    return;
}

/**
 * 2. Tìm những chuỗi có kích thước nhỏ nhất, lớn nhất.
 * @param array $a
 * @return string
 */
//chuỗi có kích thước lớn nhất
function maxSize(array $a): string
{
    $max = strlen($a[0]);
    for ($i = 1; $i < count($a); $i++) {
        if (strlen($a[$i]) > $max) {
            $max = strlen($a[$i]);
        }
    }
    for ($j = 0; $j < count($a); $j++) {
        if (strlen($a[$j]) == $max) {
            return "Chuỗi có kích thước lớn nhất là: \"$a[$j]\"";
        }
    }
}

//Chuỗi có kích thước nhỏ nhất
function minSize(array $a): string
{
    $min = strlen($a[0]);
    for ($i = 1; $i < count($a); $i++) {
        if (strlen($a[$i]) < $min) {
            $min = strlen($a[$i]);
        }
    }
    for ($j = 0; $j < count($a); $j++) {
        if (strlen($a[$j]) == $min) {
            return "\"Chuỗi có kích thước nhỏ nhất là: \"$a[$j]\"";
        }
    }
}
// expect:  Chuỗi có kích thước lớn nhất là:"     ABC    def    gh   "
//          Chuỗi có kích thước nhỏ nhất là:"hello"

/**
 * 3. Tính kích thước trung bình của các chuỗi.
 * @param array $a
 * @return float
 */
function sizeTB(array $a): float
{
    $tong = 0;
    for ($i = 0; $i < count($a); $i++) {
        $tong += strlen($a[$i]);
    }
    return $tong / count($a);
}
//expect: 13

/**
 * 4. Hiển thị những chuỗi có kích thước lớn hơn kích thước trung bình. 
 * @param array $a
 * @return 
 */
function lonHonSizeTB(array $a)
{
    $sizetb = sizeTB($a);
    for ($i = 0; $i < count($a); $i++) {
        if (strlen($a[$i]) > $sizetb) {
            echo "\"$a[$i]\" \n";
        }
    }
}
//expect: "     ABC    def    gh   "

/**
 * 5. Sắp xếp các chuỗi tăng dần, giảm dần theo kích thước.
 * @param array $a
 * @return 
 */
//Sắp xếp các chuỗi tăng dần
function sapXepTang(array $a)
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
        var_dump(strlen($a[$i]));
    }
    output($a);
    return;
}
//expect:
// Mảng sau khi sắp xếp theo thứ tự tăng dần là:
// a = ["hello","helloolleh","lap trinh 123","abc@gmail.com","     ABC    def    gh   ",]

// Sắp xếp các chuỗi giảm dần
function sapXepGiam(array $a)
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
// Mảng sau khi sắp xếp theo thứ tự giảm dần là:
// a = ["     ABC    def    gh   ","lap trinh 123","abc@gmail.com","helloolleh","hello",]

/**
 * 6. Tìm những chuỗi nhỏ nhất, lớn nhất theo thứ tự ký tự trong bảng mã ASCII.
 * @param array $a
 * @return string
 */
// Chuỗi lớn nhất
function maxBangMa(array $a): string
{
    $s = [];
    for ($i = 0; $i < count($a); $i++) {
        $s[$i] = 0;
        for ($j = 0; $j < strlen($a[$i]); $j++) {
            $s[$i] += ord($a[$i][$j]);
        }
    }
    // var_dump($s);
    $max = $s[0];
    for ($i = 1; $i < count($s); $i++) {
        if ($s[$i] > $max) {
            $max = $s[$i];
        }
    }
    for ($i = 0; $i < count($a); $i++) {
        if ($s[$i] == $max) {
            clearstatcache();
            return "Chuỗi lớn nhất theo thứ tự ký tự trong bảng mã ASCII là: \"$a[$i]\"";
        }
    }
}
// expect:  Chuỗi lớn nhất theo thứ tự ký tự trong bảng mã ASCII là: "abc@gmail.com"

// Chuỗi nhỏ nhất
function minBangMa(array $a): string
{
    $s = [];
    for ($i = 0; $i < count($a); $i++) {
        $s[$i] = 0;
        for ($j = 0; $j < strlen($a[$i]); $j++) {
            $s[$i] += ord($a[$i][$j]);
        }
    }
    $min = $s[0];
    for ($i = 1; $i < count($s); $i++) {
        if ($s[$i] < $min) {
            $min = $s[$i];
        }
    }
    for ($i = 0; $i < count($a); $i++) {
        if ($s[$i] == $min) {
            clearstatcache();
            return "Chuỗi nhỏ nhất theo thứ tự ký tự trong bảng mã ASCII là: \"$a[$i]\"";
        }
    }
}

// expect: Chuỗi nhỏ nhất theo thứ tự ký tự trong bảng mã ASCII là: "hello"

/**
 * 7. Sắp xếp các chuỗi tăng dần, giảm dần theo thứ tự ký tự trong bảng mã ASCII.
 * @param array $a
 * @return 
 */
// Sắp xếp tăng dần
function sXTangBangMa(array $a)
{
    echo "Mảng sau khi sắp xếp tăng dần theo thứ tự ký tự trong bảng mã ASCII là:\n";
    $s = [];
    for ($i = 0; $i < count($a); $i++) {
        $s[$i] = 0;
        for ($j = 0; $j < strlen($a[$i]); $j++) {
            $s[$i] += ord($a[$i][$j]);
        }
    }
    for ($i = 0; $i < count($s); $i++) {
        for ($j = $i + 1; $j < count($s); $j++) {
            if ($s[$i] > $s[$j]) {
                $tempa = $a[$i];
                $a[$i] = $a[$j];
                $a[$j] = $tempa;
                $temps = $s[$i];
                $s[$i] = $s[$j];
                $s[$j] = $temps;
            }
        }
    }
    clearstatcache();
    output($a);
}
//expect:
// Mảng sau khi sắp xếp tăng dần theo thứ tự ký tự trong bảng mã ASCII là:
// a = ["hello","helloolleh","lap trinh 123","     ABC    def    gh   ","abc@gmail.com",]

//Sắp xếp giảm dần
function sXGiamBangMa(array $a)
{
    echo "Mảng sau khi sắp xếp giảm dần theo thứ tự ký tự trong bảng mã ASCII là:\n";
    $s = [];
    for ($i = 0; $i < count($a); $i++) {
        $s[$i] = 0;
        for ($j = 0; $j < strlen($a[$i]); $j++) {
            $s[$i] += ord($a[$i][$j]);
        }
    }
    for ($i = 0; $i < count($s); $i++) {
        for ($j = $i + 1; $j < count($s); $j++) {
            if ($s[$i] < $s[$j]) {
                $tempa = $a[$i];
                $a[$i] = $a[$j];
                $a[$j] = $tempa;
                $temps = $s[$i];
                $s[$i] = $s[$j];
                $s[$j] = $temps;
            }
        }
    }
    clearstatcache();
    output($a);
}
// Mảng sau khi sắp xếp giảm dần theo thứ tự ký tự trong bảng mã ASCII là:
// a = ["abc@gmail.com","     ABC    def    gh   ","lap trinh 123","helloolleh","hello",]

/**
 * 8. Nhập vào từ bàn phím một chuỗi st có kích thước tối đa 30. Tìm những chuỗi trong mảng a có kích thước bằng chuỗi st. Tìm những chuỗi trong mảng a có chứa chuỗi st.
 * @param array $a
 * @return
 */
function timChuoi(array $a)
{
    do {
        $st = readline("Nhập chuỗi st:");
    } while (strlen($st) > 30 || strlen($st) < 0);
    echo "Các chuỗi của mảng a có kích thước bằng chuỗi st: \n";
    for ($i = 0; $i < count($a); $i++) {
        $size[$i] = strlen($a[$i]);
        if ($size[$i] == strlen($st)) {
            echo "\"$a[$i]\" \n";
        }
    }
    echo "Các chuỗi của mảng a có chứa chuỗi st: \n";
    for ($i = 0; $i < count($a); $i++) {
        if (strstr($a[$i], $st) != null) {
            echo "\"$a[$i]\" \n";
        }
    }
}
//expect: st="trinh"
// Các chuỗi của mảng a có kích thước bằng chuỗi st:
// "hello"
// Các chuỗi của mảng a có chứa chuỗi st:
// "lap trinh 123"

/**
 * 9. Tìm những chuỗi có tính đối xứng trong mảng a.
 * @param array $a
 * @return
 */
function checkDoiXung(array $a)
{
    for ($i = 0; $i < count($a); $i++) {
        $str1 = substr($a[$i], 0, strlen($a[$i]) / 2);
        $str2 = substr($a[$i], -strlen($a[$i]) / 2,);
        if ($str1 == strrev($str2)) {
            echo "\"$a[$i]\" \n";
        }
    }
}
//expect: helloolleh

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
//expect: "abc@gmail.com"

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
//expect: "lap trinh 123"

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
//expect: "     ABC    def    gh   "

/**
 * 13. Nhập từ bàn phím một ký tự c bất kỳ. Tìm những chuỗi có chứa ký tự c.
 * @param array $a
 * @return 
 */
function timKyTu(array $a)
{
    do {
        $c = readline("Nhập ký tự c:");
    } while (strlen($c) != 1);
    for ($i = 0; $i < count($a); $i++) {
        if (strchr($a[$i], $c) != null) {
            echo "\"$a[$i]\" \n";
        }
    }
}
//  $c="i"
// expect:  "abc@gmail.com"
//          "lap trinh 123"


/**
 * 14. Mỗi chuỗi trong mảng a có bao nhiêu từ?
 * @param array $a
 * @return 
 */
function demTu(array $a)
{
    for ($i = 0; $i < count($a); $i++) {
        $count[$i] = 0;
        for ($j = 0; $j < strlen($a[$i]) - 1; $j++) {
            if ($a[$i][$j] == ' ' && $a[$i][$j + 1] != ' ') {
                $count[$i]++;
            }
        }
        if ($a[$i][0] != ' ') {
            $count[$i]++;
        }
        echo "Chuỗi \"$a[$i]\" có $count[$i] từ \n";
    }
    return;
}
//expect:   Chuỗi "hello" có 1 từ
//          Chuỗi "abc@gmail.com" có 1 từ
//          Chuỗi "lap trinh 123" có 3 từ
//          Chuỗi "helloolleh" có 1 từ
//          Chuỗi "     ABC    def    gh   " có 3 từ

/**
 * 15. Nhập vào một ký tự rồi chèn ký tự đó vào vị trí thứ 5 của chuỗi cuối cùng.
 * @param array $a
 * @return 
 */
function themKyTu(array $a)
{
    do {
        $c = readline("Nhập ký tự c:");
    } while (strlen($c) != 1);
    $vtcuoi = count($a) - 1;
    if (strlen($a[$vtcuoi]) < 5) {
        echo "Độ dài chuỗi không thỏa mãn điều kiện để chèn";
    } else {
        for ($j = strlen($a[$vtcuoi]) - 1; $j >= 4; $j--) {
            $a[$vtcuoi][$j + 1] = $a[$vtcuoi][$j];
        }
        $a[$vtcuoi][4] = $c;
        output($a);
    }
    return;
}
// $c= "2"
//expect: a = ["hello","abc@gmail.com","lap trinh 123","helloolleh","    2 ABC    def    gh   ",]

/**
 * 16. Nối tất cả các chuỗi và in ra.
 * @param array $a 
 * @return string
 */
function noiChuoi(array $a): string
{
    $result = "";
    for ($i = 0; $i < count($a); $i++) {
        $result .= $a[$i];
    }
    return "\"$result\"";
}
//expect: "helloabc@gmail.comlap trinh 123helloolleh     ABC    def    gh   "

/**
 * 17. Hiển thị những chuỗi chứa chuỗi đầu tiên
 * @param array $a 
 * @return 
 */
function strContainFirstStr(array $a)
{
    for ($i = 1; $i < count($a); $i++) {
        if (strstr($a[$i], $a[0]) != null) {
            echo "\"$a[$i]\" \n";
        }
    }
    return;
}
//expect : "helloolleh"

/**
 * 18. Kiểm tra xem chuỗi đầu tiên có bắt đầu bằng chuỗi "hello" không.
 * @param array $a
 * @return bool
 */
function checkStart(array $a): bool
{
    $start = substr($a[0], 0, 5);
    if ($start == "hello") {
        return true;
    }
    return false;
}
//expect: true

/**
 * 19. Tính giá trị trung bình theo vị trí ký tự trong bảng mã ASCII của từng chuỗi.
 * @param array $a
 * @return 
 */
function tinhTBKyTu(array $a)
{
    for ($i = 0; $i < count($a); $i++) {
        $tong = 0;
        for ($j = 0; $j <= strlen($a[$i]) - 1; $j++) {
            $tong += ord($a[$i][$j]);
        }
        $tb = $tong / strlen($a[$i]);
        echo "Giá trị trung bình theo vị trí ký tự chuỗi \"$a[$i]\" là: $tb \n";
    }
}
// Giá trị trung bình theo vị trí ký tự chuỗi "hello" là: 106.4
// Giá trị trung bình theo vị trí ký tự chuỗi "abc@gmail.com" là: 95.769230769231
// Giá trị trung bình theo vị trí ký tự chuỗi "lap trinh 123" là: 83.076923076923
// Giá trị trung bình theo vị trí ký tự chuỗi "helloolleh" là: 106.4
// Giá trị trung bình theo vị trí ký tự chuỗi "     ABC    def    gh   " là: 50.833333333333

/**
 * 20. Nhập vào một độ dài xác định và in ra những chuỗi có độ dài bằng độ dài xác định đó.
 * @param array $a
 * @return 
 */
function strLength(array $a)
{
    do {
        $l = readline("Nhập độ dài:");
    } while ($l <= 0);
    for ($i = 0; $i < count($a); $i++) {
        if (strlen($a[$i]) == $l) {
            echo "\"$a[$i]\" \n";
        }
    }
    return;
}
// $l=10
// expect: "helloolleh"

/**
 * 21. Đếm số từ trong chuỗi thứ N-1
 * @param array $a
 * @return int
 */
function demTuChuoiN(array $a): int
{
    return str_word_count($a[count($a) - 2]);
}
//expect: 1

/**
 * 22. Chuyển chuỗi thứ hai thành chuỗi in hoa.
 * @param array $a
 * @return
 */
function chuoiInHoa(array $a)
{
    $a[1] = strtoupper($a[1]);
    output($a);
}
//expect: a = ["hello","ABC@GMAIL.COM","lap trinh 123","helloolleh","     ABC    def    gh   ",]

/**
 * 23. Cắt ký tự trắng ở cuối chuỗi cuối cùngs
 * @param array $a
 * @return 
 */
function catCuoiChuoi(array $a)
{
    $a[count($a) - 1] = rtrim($a[count($a) - 1], " ");
    output($a);
    return;
}
// expect: a = ["hello","abc@gmail.com","lap trinh 123","helloolleh","     ABC    def    gh",]

/**
 * 24. Cắt ký tự trắng ở đầu chuỗi cuối cùng
 * @param array $a
 * @return 
 */
function catDauChuoi(array $a)
{
    $a[count($a) - 1] = ltrim($a[count($a) - 1], " ");
    output($a);
    return;
}
// expect: a = ["hello","abc@gmail.com","lap trinh 123","helloolleh","ABC    def    gh   ",]

/**
 * 25. Cắt ký tự trắng thừa ở giữa chuỗi cuối cùng
 * @param array $a
 * @return 
 */
function catGiuaChuoi(array $a)
{
    $laststr = $a[count($a) - 1];
    for ($i = 0; $i < strlen($laststr) - 1; $i++) {
        while ($laststr[$i] == ' ' && $laststr[$i + 1] == ' ') {
            for ($j = $i; $j < strlen($laststr) - 1; $j++) {
                $laststr[$j] = $laststr[$j + 1];
            }
            $laststr[strlen($laststr) - 1] = "\0";
        }
    }
    $a[count($a) - 1] = $laststr;
    output($a);
    return;
}
//expect: a = ["hello","abc@gmail.com","lap trinh 123","helloolleh"," ABC def gh ",]


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
            echo timKyTu($a) . "\n";
            break;
        case 14:
            echo demTu($a) . "\n";
            break;
        case 15:
            echo themKyTu($a) . "\n";
            break;
        case 16:
            echo noiChuoi($a) . "\n";
            break;
        case 17:
            echo strContainFirstStr($a) . "\n";
            break;
        case 18:
            echo (checkStart($a) ? 'true' : 'false') . "\n";
            break;
        case 19:
            echo tinhTBKyTu($a) . "\n";
            break;
        case 20:
            echo strLength($a) . "\n";
            break;
        case 21:
            echo demTuChuoiN($a) . "\n";
            break;
        case 22:
            echo chuoiInHoa($a) . "\n";
            break;
        case 23:
            echo catCuoiChuoi($a) . "\n";
            break;
        case 24:
            echo catDauChuoi($a) . "\n";
            break;
        case 25:
            echo catGiuaChuoi($a) . "\n";
            break;
        default:
            echo "Hành động không hợp lệ! \n";
    }
}
