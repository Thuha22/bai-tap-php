<?php

/**
 * Cho 4 số a=3, b=5, c=2, d=4.
 * a. Hãy tìm và in ra giá trị lớn nhất (Max) và nhỏ nhất (Min) trong các số trên.
 * b. Hãy in ra các số theo thứ tự tăng dần (2 3 4 5) và thứ tự giảm dần (5 4 3 2).
 */

/**
 * In ra số lớn nhất, nhỏ nhất trong 4 số
 * @param float $a,$b,$c,$d tìm số lớn nhất nhỏ nhất
 * @return string
 */
function minMaxNumber(float $a, float $b, float $c, float $d): string
{
    $list_number = array($a, $b, $c, $d);
    $max = max($list_number);
    $min = min($list_number);
    return "Số lơn nhất là: $max <br> Số nhỏ nhất là: $min <br>";
}

echo minMaxNumber(3, 5, 2, 4);
//expect: Số lơn nhất là: 5   Số nhỏ nhất là: 2


/**
 * Sắp xếp các số theo thứ tự tăng, giảm dần
 * @param float $a,$b,$c,$d sắp xếp các số
 * @return string
 */
function sapXep(float $a, float $b, float $c, float $d): string
{
    $list_number = array($a, $b, $c, $d);
    //Sắp xếp theo thứ tự tăng dần
    sort($list_number);
    $str_tang = "";
    for ($i = 0; $i < count($list_number); $i++) {
        $str_tang .= $list_number[$i] . ",";
    }
    //Sắp xếp theo thứ tự giảm dần
    rsort($list_number);
    $str_giam = "";
    for ($i = 0; $i < count($list_number); $i++) {
        $str_giam .= $list_number[$i] . ",";
    }
    return "các số sắp xếp theo thứ tự tăng dần là: $str_tang <br>các số sắp xếp theo thứ tự giảm dần là: $str_giam ";
}

echo sapXep(3, 5, 2, 4);
//expect:  các số sắp xếp theo thứ tự tăng dần là: 2,3,4,5,
//         các số sắp xếp theo thứ tự giảm dần là: 5,4,3,2,
