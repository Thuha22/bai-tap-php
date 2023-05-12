<?php
// Viết chương trình thực hiện các công việc sau , mảng n gồm số thực
$arr = ['25', '-9', '0', '3', '-7', '18'];

/** Tìm số lớn nhất trong mảng
 * @param
 * @return int
 */
function maxNumber(): int
{
    global $arr;
    return max($arr);
}

/** Tìm số nhỏ nhất trong mảng
 * @param
 * @return int
 */
function minNumber(): int
{
    global $arr;
    return min($arr);
}

/** Tìm số dương chẵn lớn nhất trong mảng
 * @param
 * @return int
 */
function soDuongChanMax(): int
{
    global $arr;
    rsort($arr);
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] % 2 == 0 && $arr[$i] > 0) {
            return $arr[$i];
        }
    }
}

/** Tìm số âm lẻ nhỏ nhất trong mảng
 * @param
 * @return int
 */
function soAmLeMin(): int
{
    global $arr;
    sort($arr);
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] % 2 != 0 && $arr[$i] < 0) {
            return $arr[$i];
        }
    }
}

/** Tính trung bình cộng các phần tử mảng
 * @param
 * @return int
 */
function tinhTBC(): int
{
    global $arr;
    $tbc = array_sum($arr) / count($arr);
    return $tbc;
}
?>

<h3>MENU</h3>
<p>1. Tìm số lớn nhất</p>
<p>2. Tìm số nhỏ nhất</p>
<p>3. Tìm số dương chẵn lớn nhất</p>
<p>4. Tìm số âm lẻ nhỏ nhất</p>
<p>5. Tính trung bình cộng các phần tử</p>
<p>6. Thoát</p>
<p> Nhập vào một lựa chọn:</p>
<form action="" method="post">
    <input type="number" name="hd" value="" placeholder="">
    <input type="submit">
</form>
<?php
if (isset($_POST['hd'])) {
    $chon = $_POST['hd'];
    switch ($chon) {
        case 1:
            echo maxNumber();
            break;
        case 2:
            echo minNumber();
            break;
        case 3:
            echo soDuongChanMax();
            break;
        case 4:
            echo soAmLeMin();
            break;
        case 5:
            echo tinhTBC();
            break;
        case 6:
            return 0;
        default:
            echo "vui lòng chọn một lựa chọn (1-6):";
    }
}
?>