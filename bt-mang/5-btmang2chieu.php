<?php

/**
 *  Cho mảng 2 chiều A, là ma trận vuông cấp n x n, lập chương trình:
 */
$a = [
    [1, -4, 2, 1, 5],
    [0, 17, 20, 4, 4],
    [0, -6, -9, 11, 9],
    [13, 7, 9, 1, 15],
    [16, 8, 23, 0, 7]
];

/**
 * Tính tổng tất cả các phần tử dương của mảng.
 * @param array $a tính tổng phần tử dương
 * @return int
 */
function tongPTDuong(array $a): int
{
    $tong = 0;
    for ($i = 0; $i < count($a); $i++) {
        for ($j = 0; $j < count($a[$i]); $j++) {
            if ($a[$i][$j] > 0) {
                $tong += $a[$i][$j];
            }
        }
    }
    return $tong;
}
// echo tongPTDuong($a);
//expect: 173

/**
 * Tính tổng các phần tử A[i][j] trong đó (i + j) chia hết cho 5.
 * @param array $a tính tổng phần tử thỏa mãn đk
 * @return int
 */
function tinhTong(array $a): int
{
    $tong = 0;
    for ($i = 0; $i < count($a); $i++) {
        for ($j = 0; $j < count($a[$i]); $j++) {
            if (($i + $j) % 5 == 0) {
                $tong += $a[$i][$j];
                var_dump($a[$i][$j]);
            }
        }
    }
    return $tong;
}
// echo tinhTong($a);
//expect: 33

/**
 * Hiển thị ma trận dưới dạng bảng
 * @param array $a hiển thị ma trận
 * @return 
 */
function output($a)
{
    $hang = count($a);
    $cot = count($a[0]);
    for ($i = 0; $i < $hang; $i++) {
        for ($j = 0; $j < $cot; $j++) {
            echo $a[$i][$j] . "    ";
        }
        echo "<br>";
    }
    return;
}

/**
 * Sắp xếp tăng dần theo hàng.
 * @param array $a sắp xếp tăng theo hàng
 * @return
 */
function sapXepTheoHang(array $a)
{
    $hang = count($a);
    $cot = count($a[0]);
    for ($i = 0; $i < $hang; $i++) {
        for ($j = 0; $j < $cot; $j++) {
            for ($k = $j + 1; $k < $cot; $k++) {
                if ($a[$i][$j] > $a[$i][$k]) {
                    $temp = $a[$i][$j];
                    $a[$i][$j] = $a[$i][$k];
                    $a[$i][$k] = $temp;
                }
            }
        }
    }
    output($a);
    return;
}
// echo sapXepTheoHang($a);
// -4 1 1 2 5
// 0 4 4 17 20
// -9 -6 0 9 11
// 1 7 9 13 15
// 0 7 8 16 23

/**
 * Sắp xếp giảm dần theo cột .
 * @param array $a sắp xếp giảm theo cột
 * @return
 */
function sapXepTheoCot(array $a)
{
    $hang = count($a);
    $cot = count($a[0]);
    for ($i = 0; $i < $cot; $i++) {
        for ($j = 0; $j < $hang; $j++) {
            for ($k = $j + 1; $k < $hang; $k++) {
                if ($a[$j][$i] < $a[$k][$i]) {
                    $temp = $a[$j][$i];
                    $a[$j][$i] = $a[$k][$i];
                    $a[$k][$i] = $temp;
                }
            }
        }
    }
    output($a);
    return;
}
// echo sapXepTheoCot($a);
// 16 17 23 11 15
// 13 8 20 4 9
// 1 7 9 1 7
// 0 -4 2 1 5
// 0 -6 -9 0 4


/**
 * Sắp xếp tăng dần theo hàng và cột.
 * @param array $a sắp xếp tăng toàn mảng
 * @return
 */
function sapXepToanMang(array $a)
{
    $hang = count($a);
    $cot = count($a[0]);
    $pt = $hang * $cot;
    for ($i = 0; $i < $pt - 1; $i++) {
        for ($j = $i + 1; $j < $pt; $j++) {
            if ($a[(int)($i / $cot)][$i % $cot] > $a[(int)($j / $cot)][$j % $cot]) {
                $temp = $a[(int)($i / $cot)][$i % $cot];
                $a[(int)($i / $cot)][$i % $cot] = $a[(int)($j / $cot)][$j % $cot];
                $a[(int)($j / $cot)][$j % $cot] = $temp;
            }
        }
    }
    output($a);
    return;
}
// echo sapXepToanMang($a);
// -9 -6 -4 0 0
// 0 1 1 1 2
// 4 4 5 7 7
// 8 9 9 11 13
// 15 16 17 20 23


/**
 * Tính tổng các phần tử trên đường chéo chính (i = j) và trên đường biên.
 * @param array $a tính tổng
 * @return int
 */
function tongPTTM(array $a): int
{
    $hang = count($a);
    $cot = count($a[0]);
    $tong = 0;
    for ($i = 0; $i < $hang; $i++) {
        for ($j = 0; $j < $cot; $j++) {
            if ($i == $j || $i == 0 || $i == $hang - 1 || $j == 0 || $j == $cot - 1) {
                $tong += $a[$i][$j];
                var_dump($a[$i][$j]);
            }
        }
    }
    return $tong;
}
// echo tongPTTM($a);
//expect: 109


/**
 * Tìm phần tử max theo từng hàng
 * @param array $a tìm max theo hàng
 * @return
 */
function maxHang(array $a)
{
    $hang = count($a);
    $cot = count($a[0]);
    for ($i = 0; $i < $hang; $i++) {
        $max = $a[0][0];
        for ($j = 0; $j < $cot; $j++) {
            if ($a[$i][$j] > $max) {
                $max = $a[$i][$j];
            }
        }
        echo "max hàng " . ($i + 1) . " là $max <br>";
    }
    return;
}
// echo maxHang($a);
// max hàng 1 là 5
// max hàng 2 là 20
// max hàng 3 là 11
// max hàng 4 là 15
// max hàng 5 là 23

/**
 * Tìm phần tử max theo từng cột 
 * @param array $a tìm max theo cột
 * @return
 */
function maxCot(array $a)
{
    $hang = count($a);
    $cot = count($a[0]);
    for ($i = 0; $i < $cot; $i++) {
        $max = $a[0][0];
        for ($j = 0; $j < $hang; $j++) {
            if ($a[$j][$i] > $max) {
                $max = $a[$j][$i];
            }
        }
        echo "max cột " . ($i + 1) . " là $max <br>";
    }
    return;
}
echo maxCot($a);
// max cột 1 là 16
// max cột 2 là 17
// max cột 3 là 23
// max cột 4 là 11
// max cột 5 là 15


/**
 * Tìm phần tử max theo toàn bộ ma trận.
 * @param array $a tìm max toàn bộ ma trận
 * @return int
 */
function maxToanMang(array $a): int
{
    $hang = count($a);
    $cot = count($a[0]);
    $pt = $hang * $cot;
    $max = $a[0][0];
    for ($i = 0; $i < $pt - 1; $i++) {
        for ($j = $i + 1; $j < $pt; $j++) {
            if ($a[(int)($i / $cot)][$i % $cot] > $max) {
                $max = $a[(int)($i / $cot)][$i % $cot];
            }
        }
    }
    return $max;
}
echo maxToanMang($a);
//expect:23
