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
echo maxNumber() . "<br>";
//expect:25

/** Tìm số nhỏ nhất trong mảng
 * @param
 * @return int
 */
function minNumber(): int
{
    global $arr;
    return min($arr);
}
echo minNumber() . "<br>";
//expect:-9

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
echo soDuongChanMax() . "<br>";
//expect:18

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
echo soAmLeMin() . "<br>";
//expect: -9

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
echo tinhTBC();
//expect:5
