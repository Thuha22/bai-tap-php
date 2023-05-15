<?php

/**
 *  Viết chương trình dưới dạng không dùng hàm và dùng hàm.
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
 */
function tongPTDuong($a)
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
 */
function tinhTong($a)
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
}

/**
 * Sắp xếp tăng dần theo hàng.
 */
function sapXepTheoHang($a)
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
}
// echo sapXepTheoHang($a);

/**
 * Sắp xếp giảm dần theo cột .
 */

function sapXepTheoCot($a)
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
}
// echo sapXepTheoCot($a);


/**
 * Sắp xếp tăng dần theo hàng và cột.
 */

function sapXepToanMang($a)
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


/**
 * Tính tổng các phần tử trên đường chéo chính (i = j) và trên đường biên.
 */
function tongPTTM($a)
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
 * Tìm phần tử max, phần tử min theo từng hàng, từng cột và toàn bộ ma trận.
 */
function maxHang($a)
{
    $hang = count($a);
    $cot = count($a[0]);
    $pt = $hang * $cot;
    $max = $a[0][0];
    for ($i = 0; $i < $hang; $i++) {
        for ($j = 0; $j < $cot; $j++) {
            for ($k = $j + 1; $k < $cot; $k++) {
                if ($a[$i][0] > $max) {
                    $max = $a[$i][0];
                }
            }
        }
        echo "max hàng " . ($i + 1) . " là $max <br>";
    }
    return;

    // $max = $a[0][0];
    // for ($i = 0; $i < count($a); $i++) {
    //     if ($a[$i][0] > $max) {
    //         $max = $a[$i][0];
    //     }
    // }
    // return $max;
}
echo maxHang($a);
